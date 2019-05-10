<?php

class Controller_Admin extends Controller_Base 
{
	public function before() 
	{
		parent::before();
		
		$login = Session::get('login');
		
		if(!$login->is_admin)
		{
			return Response::redirect('authenticate/noAccess');
		}
		
		if(is_null($login))
		{
			return Response::redirect('authenticate/login');
		}
	}
	
	public function action_index()
	{
			$orders = Model_Order::find('all');

			$data = 
			[
				'orders' => $orders,
			];

			return View::forge('admin/allOrders.tpl', $data);
	}
	
	public function action_adminDetail($id)
	{
		$order = Model_Order::find($id);
		$user = Model_User::find($order->user_id);
		$sub = 0.00;
		$total_price = 0.00;
		$selections = $order->selections;
		
		foreach($selections as $selection)
		{
			$id = $selection->product_id;
			$product = Model_Product::find('id');
			
			$items[$id] =
				[
					'id' => $id,
					'name' => $selection->product->name,
					'category' => $selection->product->category->name,
					'purchase_price' => $selection->purchase_price,
					'quantity' => $selection->quantity,
					'sub' => ($selection->quantity * $selection->purchase_price),
				];
			
			$total_price = number_format($total_price + $items[$id]['sub'],2);
		}
		
		$data =
			[
				'user' => $user,
				'items' => $items,
				'total_price' => $total_price,
				'order' => $order				
			];
		
		return View::forge('user/details.tpl',$data);
	}
	
	public function action_process($id)
	{
		$order = Model_Order::find($id);
		$cancel = Input::param('cancel');
		
		if(!is_null($cancel))
		{
			return Response::redirect("/admin/");
		}
		
		$confirm = Input::param('confirm');
		
		if(!is_null($confirm))
		{
			$order->delete();
			$confirm = "Order #".$id." successfully processed";
			$confirmation = Session::set_flash('confirm', $confirm);
			return Response::redirect('/admin/');
		}
		
		else
		{
			Session::set_flash('set_confirm',1);
			Session::set_flash('message', "Press Process again to confirm");
			return Response::redirect("/admin/adminDetail/$id");
		}
		
	}
	
	public function action_addCategory()
	{		
		foreach (Model_Category::find('all') as $rec) 
		{
			$category[$rec->id] = $rec->name;
		}
		
		$data =
			[
				'category' => $category
			];
		
		$view = View::forge('admin/addCategory.tpl', $data);
		
		return $view;
	}
	
	public function action_addCatReenter()
	{
		$add = Input::get('add');
		$cancel = Input::get('cancel');
		$newCat = Input::get('newCat');
		
		if(!is_null($cancel))
		{
			return Response::redirect('/admin/addCategory/');
		}
		
		$trimmed = trim($newCat);
		
		if(is_null($trimmed))
		{
			return Response::redirect('admin/addCategory/');
		}
		
		$categoryWithName = Model_Category::find('first', ['where' => ['name' => $trimmed]]);
		
		if(!is_null($categoryWithName))
		{
			return Response::redirect('admin/addCategory/');
		}
		
		$category = Model_Category::forge();
		$category->name = $trimmed;
		$category->save();
		
		return Response::redirect("/");
	}
}

