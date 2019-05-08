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
		$products = $order->products;
		$selections = $order->selections;
		
//		foreach($selections as $selection)
//		{
//			$sub[$selection->id] = $selection->purchase_price * $selection->quantity;
//			$total_price += $sub;
//		}
		
		
//		foreach($products as $product)
//		{
//			$purchase_price = Model_Selection::get('purchase_price', array('where'
//				=> array('product_id' => $product->id)));
//		}
		
		$data =
			[
				'products' => $products,
				'sub' => $sub,
				'total_price' => $total_price,
				'selections' => $selections
			];
		
		return View::forge('user/details.tpl',$data);
	}
}

