<?php

class Controller_User extends Controller_Base 
{
	public function before() 
	{
		parent::before();
		
		$login = Session::get('login');
		
		if(is_null(Session::get('login')))
		{
			return Response::redirect('/');
		}
		
		$this->user = Model_User::find($login->id);
	}
	
	public function action_index()
	{
		
		$orders = $this->user->orders;
		
		$data =
			[
				'orders' => $orders,		
			];
	

		return View::forge('user/myOrders.tpl', $data);
	}
	
	public function action_orderDetail($id)
	{
		$order = Model_Order::find($id);
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
				'items' => $items,
				'total_price' => $total_price,
				'order' => $order
				
			];
		
		return View::forge('user/details.tpl',$data);
	}
	
	
}

