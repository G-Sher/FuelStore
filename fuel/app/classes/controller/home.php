<?php
	class Controller_Home extends Controller_Base 
	{
		public function before() 
		{
			parent::before();
			
			//For testing purposes only
	
//			Session::destroy();
			
			if (is_null(Session::get('field'))) 
			{
			   Session::set('field','name');
			}
		}
	
		public function action_setOrder($order)
		{
			if($order == 'name')
			{
				Session::set('field', 'name');
				Response::redirect('/home/showCategory/');
			}
			
			if($order == 'price')
			{
				Session::set('field', array('price' => 'desc'));
				Response::redirect('/home/showCategory/');
			}
		}
		public function action_showCategory()
		{
			$newCat = Input::get('category_id');
		
			if(isset($newCat))
			{ 
				Session::set('category', $newCat);
			}
		
			if(Session::get('category') == 0 || is_null(Session::get('category')))
			{
				Session::delete('category');
				return Response::redirect('/');
			}
		
			$categories[0] = "-- ALL --";

			foreach (Model_Category::find('all') as $rec) 
			{
				$categories[$rec->id] = $rec->name;
			}
		
			$order = Session::get('field');
		
			$products = Model_Product::find('all', 
					array('where'=>array('category_id' => Session::get('category'))), 
					array('order_by'=> $order));
		
			$data = 
			[
				'products' => $products,
				'categories' => $categories,
				'category_id' => Session::get('category'),
			];
		
			return View::forge('home/index.tpl', $data);
		}

		public function action_index() 
		{
			if(!is_null(Session::get('category')))
			{
				return $this->action_showCategory();
			}
			$categories[0] = "-- ALL --";

			foreach (Model_Category::find('all') as $rec) 
			{
				$categories[$rec->id] = $rec->name;
			}
    
			$order = Session::get('field');
			$products = Model_Product::find('all', array('order_by' => $order));

			$data = [
				'products' => $products,
				'categories' => $categories,
				'category_id' => null,
			];
			
			return View::forge('home/index.tpl', $data);
		}
	}
