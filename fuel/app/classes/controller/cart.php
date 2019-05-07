<?php

class Controller_Cart extends Controller_Base 
{
	public function before() 
	{
		parent::before();

		$cancel = Input::get('cancel');
		$remove = Input::get('remove');
		
		if (!is_null($cancel)) 
		{
			Response::redirect('/');
		}

		if(!is_null($remove))
		{
			Response::redirect('/cart/remove/');
		}
	}

	public function action_show($product_id) 
	{
		$product = Model_Product::find($product_id);
		$image_src = "products/$product->photo_file";
		Session::set_flash('product_id', $product_id);
		
		if(!is_null(Session::get('cart',[$product_id])))
		{
			$quantity = Session::get
		}
	
		$data = 
		[
			'product' => $product,
			'image_src' => $image_src,
		];

		$view = View::forge('home/showProduct.tpl', $data);
		$view->set_safe('description', $product->description);
		
		return $view;
	}

	public function action_index() 
	{		
		$set = Input::get('set');
		
		if(!is_null($set))
		{
			$quantity = intval(Input::get('quantity'));
			$product_id = Session::get_flash('product_id');
			
			$myCart = Session::get('cart');
			$myCart[$product_id] = $quantity;
			Session::set('cart', $myCart);
		}
		
			$total_price = 0.00;
			
		if(!is_null(Session::get('cart')))
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
					'sub' => $cart * $product->price
				];

				$total_price = number_format($total_price + $cart_info[$id]['sub'],2);
			}
		}
			
		else
		{
			$cart_info = 
			[
				'id' => "",
				'name' => "",
				'category' => "",
				'price' => null,
				'quantity' => "",
				'sub' => ""
			];
		}
			
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
