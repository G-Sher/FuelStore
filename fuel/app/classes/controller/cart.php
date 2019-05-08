<?php

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
			//if the cart doesn't have things in it
			if( null == Session::get('cart'))
			{
				
//				echo "fuck you!";
				$cart_info = 
				[
					'id' => ".",
					'name' => ".",
					'category' => ".",
					'price' => ".",
					'quantity' => ".",
					'sub' => "." 
				];
				
				$data = 
				[
					'cart_info' => $cart_info,
					'total_price' => $total_price,
				];

//				var_dump($cart_info);
//				return false;
				return View::forge('cart/index.tpl', $data);
			}
			
			//if the cart has things in it
			if(null !== Session::get('cart'))
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
			
		}
			//send the data
			$data = 
			[
				'cart_info' => $cart_info,
				'total_price' => $total_price,
			];

			return View::forge('cart/index.tpl', $data);
		
	}
	
	public function action_link() 
	{
		return "cart/something";
	}

}
