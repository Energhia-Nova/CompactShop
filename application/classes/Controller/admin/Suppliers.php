<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Suppliers extends Controller_Admin_Base {
    
    // Suppliers list
    public function action_index()
    {
        $suppliers = ORM::factory('supplier')->find_all();
        $view = View::factory('admin/supplier/suppliers_list')->bind('suppliers',$suppliers);
        $this->template->content = $view;
    }

    public function action_new_supplier()
    {
        if ($post = $this->request->post())
        {
			$supplier = ORM::factory('supplier');
			$supplier->name = trim($post['name']);
			$supplier->alias = trim($post['alias']);
			$supplier->description = trim($post['description']);
			$supplier->save();
        }
		
        $view = View::factory('admin/supplier/new_supplier');
        $this->template->content = $view;
    }
	
	public function action_edit()
	{
		$supplier_id = $this->request->param('id');
	
		if ($post = $this->request->post())
		{		
            $supplier = ORM::factory('supplier',$supplier_id);
            $supplier->name = trim($post['name']);
            $supplier->alias = trim($post['alias']);
            $supplier->description = trim($post['description']);
            $supplier->save();
		}
		
		$supplier = ORM::factory('supplier',$supplier_id);
		$view = View::factory('admin/supplier/edit_supplier')->bind('supplier',$supplier);
		$this->template->content = $view;
	}
	
	public function action_remove()
	{
		if ($supplier_id = $this->request->param('id'))
		{
			ORM::factory('supplier',$supplier_id)->delete();
		}
		
		$this->request->redirect('admin/suppliers');
	}
	
}