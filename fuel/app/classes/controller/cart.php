<?php
define("SECONDS_PER_DAY", 3600 * 24);

class Controller_Cart extends Controller_Base 
{
	public function before() 
	{
		parent::before();

		$cancel = Input::get('cancel');
		$remove = Input::get('remove');
		
		if(is_null(Session::get('cart')))
		{
			Session::set('cart', []);
		}
		
		if (!is_null($cancel)) 
		{
			Response::redirect('/');
		}

		if(!is_null($remove))
		{
			$product_id = Session::get_flash('product_id');
			Arr::delete(Session::get('cart'), $product_id);
			Response::redirect('/cart/');
		}
	}

	public function action_show($product_id) 
	{
		
		$product = Model_Product::find($product_id);
		$image_src = "products/$product->photo_file";
		Session::set_flash('product_id', $product_id);
		
		if(is_null(Arr::get(Session::get('cart'), $product_id)))
		{
			$data = 
			[
				'product' => $product,
				'image_src' => $image_src,
				'quantity' => ''
			];
		}
		
		else
		{
			
			$quantity = Arr::get(Session::get('cart'), $product_id);
			
			$data = 
			[
				'product' => $product,
				'image_src' => $image_src,
				'quantity' => $quantity
			];
		}
		
		$view = View::forge('home/showProduct.tpl', $data);
		$view->set_safe('description', $product->description);
		
		return $view;
	}

	public function action_index() 
	{		
		$set = Input::get('set');
		$total_price = 0.00;
		$quantity = intval(Input::get('quantity'));
		$product_id = Session::get_flash('product_id');
		
		//if we're adding an item to the cart
		if(!is_null($set))
		{			
			$myCart = Session::get('cart');
			$myCart[$product_id] = $quantity;
			Session::set('cart', $myCart);
			
			foreach(Session::get('cart') as $key => $cart)
			{
				$id = $key;

				$product = Model_Product::find($id);

				$cart_info[$id] = 
				[ 
					'id' => $id,
					'name' => $product->name,
					'category' => $product->category->name,
					'price' => $product->price, 
					'quantity' => $cart,
					'sub' => $cart * intval($product->price)
				];

				$total_price = number_format($total_price + $cart_info[$id]['sub'],2);
			}
		}
		
		//if we're coming to check out the cart but not adding anything
		else 
		{			
			//if the cart has things in it
			if(count(Session::get('cart')) > 0)
			{
				foreach(Session::get('cart') as $key => $cart)
				{
					$id = $key;

					$product = Model_Product::find($id);

					$cart_info[$id] = 
					[ 
						'id' => $id,
						'name' => $product->name,
						'category' => $product->category->name,
						'price' => $product->price, 
						'quantity' => $cart,
						'sub' => intval($cart) * intval($product->price)
					];

					$total_price = number_format($total_price + $cart_info[$id]['sub'],2);
				}
			}
			
			//if the cart doesn't have things in it
			else
			{
				
//				echo "fuck you!";
				$cart_info = 0;
				
//				$data = 
//				[
//					'cart_info' => $cart_info,
//					'total_price' => $total_price,
//				];
//
////				var_dump($cart_info);
////				return false;
//				return View::forge('cart/index.tpl', $data);
			}
			
		}
			//send the data
			$data = 
			[
				'cart_info' => $cart_info,
				'total_price' => $total_price,
			];

			return View::forge('cart/index.tpl', $data);
		
	}
	
	public function action_makeOrder() 
	{
		$login = Session::get('login');
		$user_id = $login->id;
		
		$order = Model_Order::forge();
		$order->user_id = $user_id;
		$order->created_at = date("Y-m-d H:i:s", time());
		$order->save();
		
		$cart_item = Session::get('cart');
		
		foreach($cart_item as $id => $quantity)
		{
			$product = Model_Product::find($id);
			
			$item = Model_Selection::forge();
			$item->order_id = $order->id;
			$item->product_id = $id;
			$item->quantity = $quantity;
			$item->purchase_price = $product->price;
			$item->save();
		}
		
		Session::delete('cart');
		return Response::redirect('/user/');
	}
}
