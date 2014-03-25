<?php defined('SYSPATH') or die('no direct script access.');

class Controller_Order extends Controller_Base {
    
    public function action_index()
    {	
		if (!Auth::instance()->logged_in()) $this->redirect(URL::base(true));
				
		// Werfen Sie alles, was in dem Korb ist
		// Bis der Auftrag nicht im Admin-Admin-Benutzer verwendet werden kann, eine zweite, um nicht zu schaffen!
		
		$total_price = 0;
		
		/* 
			Wenn es nichts in Ihren Einkaufswagen, dann in der Tabelle Bestellungen suchen, 
			Wenn der Benutzer den Auftrag hat, mit dem Status 1, dh Warten 
			dann ausdrucken
		*/
		$count = ORM::factory('order')
			->where('user_id','=',Auth::instance()->get_user()->id)
			->where('status_id','=',1)
			->count_all();
								
		/* Wenn es bereits ein Mitglied dieser Ordnung */
		if ($count>0)
		{
			/* Ziehen Sie die Reihenfolge, die die Ausführung erwartet */
			$order = ORM::factory('order')->where('user_id','=',Auth::instance()->get_user()->id)->where('status_id','=',1)->find();
			
			/* Nehmen Sie alle diese Bestellung */
			$purchases = $order->purchases->find_all();
			
			/* Wir berechnen den Gesamtpreis für die Reservierung */
			foreach ($purchases as $purchase)
			{
				$total_price+=($purchase->amount*$purchase->product->price);
			}
			
			$number = $order->id;
									
		} /* Wenn nein, dann aus dem Korb entnommen und durch */
		else
		{		
			/* Hier nehmen wir alle Käufe aus dem Warenkorb */
			$cart_purchases = ORM::factory('cart')
				->where('user_id','=',Auth::instance()->get_user()->id)
				->find_all();
			
			/* 
				Natürlich muss der Korb etwas zu sein, um zu tragen, um 
				prüfen, ob es etwas in den Korb, wenn es nichts gibt, 
				wir den Benutzer umzuleiten, um den Haupt
			*/
			if ($cart_purchases->count()==0) $this->redirect(URL::base(true));
					
			/* Stellen Sie den Status der Bestellung 1 */
			$order = ORM::factory('order');
			$order->user_id = Auth::instance()->get_user()->id;
			$order->status_id=1;
			$order->save();
												
			/* 
				Weil, so weit, wir haben die R gedrückt ("ready"), 
				es bedeutet, dass wir die notwendige Kauf erhalten und unser Auftrag ist bereit, 
				entfernen Sie sie dann aus dem Korb und fügen Sie die Tabelle Bestellungen
			*/
			foreach ($cart_purchases as $p)
			{
				$purchase = ORM::factory('purchase');
				$purchase->order_id = $order->id;
				$purchase->product_id = $p->product_id;
				$purchase->amount = $p->amount;
				$purchase->save();				
				// Entfernen Sie alle Körbe
				ORM::factory('cart',$p->id)->delete();			
			}
			
			$number = $order->id;
			
			$purchases = $order->purchases->find_all();
			
			/* Wir berechnen den Gesamtpreis für die Reservierung */
			foreach ($purchases as $purchase)
			{
				$total_price+=($purchase->amount*$purchase->product->price);
			}
		}
		
		/* visuell Empty "infograf" */
		$this->template->purchases = array();
				
		$total_price = number_format($total_price,2,'.','');
										
		$this->template->content = View::factory('user/order')->bind('purchases',$purchases)->bind('total_price',$total_price)->bind('number',$number);
		
    }
	
} // End Order.