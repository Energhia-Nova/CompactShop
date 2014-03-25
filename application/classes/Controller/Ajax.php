<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller_Base {

	public function action_index()
	{
		exit;
	}
	
	public function action_check()
	{
		if (!Auth::instance()->logged_in()) exit;
		
		/* Beachten Sie unsere Tabelle mit Bestellungen und prüfen, ob es einen aktuellen Auftrags */
		$count = ORM::factory('order')->where('user_id','=',Auth::instance()->get_user()->id)->where('status_id','=',1)->count_all();
		
		/* Wenn es bereits ein Mitglied dieser Ordnung */
		if ($count>0)
		{
			echo $count;
		}
		else
		{
			echo 0;
		}
		
		exit;
	}

	public function action_cart()
	{		
		if (!Auth::instance()->logged_in()) exit;
		
		/* Überprüfen Sie auch, wenn Sie bereits einen Auftrag, oder tun */
		$count = ORM::factory('order')->where('user_id','=',Auth::instance()->get_user()->id)->where('status_id','=',1)->count_all();
		
		/* Wenn es bereits ein Mitglied dieser Ordnung */
		if ($count>0)
		{
			exit;
		}
		
		// Hinzufügen / Entfernen von der Droge den Warenkorb
		if ($post = $this->request->post())
		{
			// Abbrechen Kauf
			if (isset($post['func']) and $post['func']=='cancel')
			{
				$cart = ORM::factory('cart',array('user_id'=>Auth::instance()->get_user()->id, 'product_id'=>$post['product_id']));
				
				$amount = $cart->amount;
				
				if ($amount==1)
				{
					$cart->delete();
				}
				else
				{
					$amount--;
					$cart->amount = $amount;
					$cart->save();				
				}
			
				exit;
			}
		
			$cart = ORM::factory('cart',array('user_id'=>Auth::instance()->get_user()->id,'product_id'=>$post['product_id']));
			// Wenn ein solches Produkt in der Datenbank, und die Zahl der
			if ($cart->loaded())
			{
				$amount = $cart->amount;
				$amount++;
				$cart->amount=$amount;
				$cart->save();
			} // Wenn immer noch kein solches Produkt in der Datenbank, dann fügen
			else
			{		
				// Wenn die Reihenfolge nicht existiert, erstellen, neue Aufträge im Warenkorb zur Kasse
				$cart = ORM::factory('cart');
				$cart->user_id = Auth::instance()->get_user()->id;
				$cart->product_id = $post['product_id'];
				$cart->amount = 1;
				$cart->save();
				
				/* Einmal in den Warenkorb erstellt werden, um Warenkorb wird gelöscht 
					und alle werden auf den Tisch bereit zu bestellen hinzugefügt werden
				*/
			}
		}
		exit;
	}
	
	public function action_order()
	{
		// Dies wird auch eine Überprüfung für den Admin
		if (!Auth::instance()->logged_in()) exit;
	
		if ($post = $this->request->post())
		{
			$order_id = $post['ordid'];
			$status_id = $post['status'];
			$order=ORM::factory('order',$order_id);
			$order->status_id = $status_id;
			$order->save();
		}
		
		exit;
	}
}