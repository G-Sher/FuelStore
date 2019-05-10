<?php

class Controller_Add extends Controller_Base 
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
		
		$category_recs = Model_Category::find('all', ['order_by' => 'name']);
		$products = Model_Product::find('all', ['order_by' => 'photo_file']);
		
		foreach($products as $product)
		{
			$photo_files = $product->photo_file;
		} 
		foreach($category_recs as $rec) 
		{
			$categories[$rec->id] = $rec->name;
		}
	}
	
	public function action_index()
	{
		
		$category_recs = Model_Category::find('all', ['order_by' => 'name']);
		$products = Model_Product::find('all', ['order_by' => 'photo_file']);
		
		foreach($products as $product)
		{
			$photo_files = $product->photo_file;
		} 
		foreach($category_recs as $rec) 
		{
			$categories[$rec->id] = $rec->name;
		}
		
		$data = 
		[
			'category' => $categories,
			'photo_files' => $photo_files,
			'name' => null,
			'price' => null,
			'binding' => null,
		];
		
		return View::forge('admin/addProduct.tpl', $data);
	}
	
	public function action_productReentry()
	{
		$name = filter_input(INPUT_POST, 'name');
		$price = filter_input(INPUT_POST, 'price');
		$category = filter_input(INPUT_POST, 'category');
		$description = filter_input(INPUT_POST, 'description');
		$photo_file = filter_input(INPUT_POST, 'photo_files');

		$patternStr = "/^([1-9]\\d*)?(\\.\\d{0,2})?$/";

		// foreach($photoFiles as $files)
		// {
		//     $flag = 0;
		//     //search for that file in the already used files
		//     foreach($photos as $used)
		//     {
		//         //if it's there
		//         if($files == $used)
		//         {
		//             $flag++;
		//         }
		//     }

		//     if($flag = 0)
		//     {
		//         $photo_files = $files;
		//     }
		// }
		try {
		  $trim_name = trim($name);
		  $trim_price = trim($price);

		  if (strlen($trim_name) < 3) {
			throw new Exception("name must have at least 3 chars");
		  }

		   if (!preg_match($patternStr, $trim_price)) {
			 throw new Exception("illegal price format");
		   }

		  $productWithName = R::findOne('product', "name=?", [$trim_name]);
		 // $specPhoto = R::getCell("SELECT photo_file FROM product WHERE photo_file = :photo", [':photo' => $photo_file]);

		  if (!is_null($productWithName)) {
			throw new Exception("Product with this name already exists");
		  }

		  $product = R::dispense('product');
		  $product->name = $trim_name;
		  $product->price = $trim_price;//$trim_price;
		  $product->category_id = $category;
		  $product->description = $description;
		  $product->photo_file = $photo_file;

		  $id = R::store($product);

		  header("location: showProduct.php?product_id=$id");
		  exit();
		}
		catch (Exception $ex) {
		  $message = $ex->getMessage();
		  echo $specPhoto;
		  echo "<p></p> </br>";
		  echo $photo_file;
		}

		$category_recs = R::findAll('category', 'order by name');
		$photo_files = R::getCol('SELECT photo_file FROM product ORDER BY photo_file ASC');

		foreach($category_recs as $rec) 
		{
			$categories[$rec->id] = $rec->name;
		}

		// foreach($photo_files as $photo)
		// {
		//     $photos[$photo->id] = $photo->name;
		// }

		$data = 
		[
			'name'    => $name,
			'quantity' => $price,
			'category'  => $categories,
			'message'  => $message,
			'photo_files' => $photo_files
		];
	}
	
	private function getBookBindings() {
    return ["paper" => "paper", "cloth" => "cloth"];
  }
 
  public function action_addBook() {
    //return "addBook";
    //
    // When initial and reentrant controllers are separate, no validation is
    // done on initial entry; so we just need a "placeholder" for validator.
    $validator = Validation::forge();
	$category_recs = Model_Category::find('all', ['order_by' => 'name']);
	$products = Model_Product::find('all', ['order_by' => 'photo_file']);
		
	foreach($products as $product)
	{
		$photo_files = $product->photo_file;
	} 
	foreach($category_recs as $rec) 
	{
		$categories[$rec->id] = $rec->name;
	}
    
	$data = [
        'category' => $categories,
		'photo_files' => $photo_files
    ];
 
    $view = View::forge("admin/addProduct.tpl", $data);
    $view->set_safe('validator', $validator); // pass validator
    return $view;
  }
 
  public function action_addBookReentrant() {
    //return "addBookReentrant";
 
    $cancel = Input::post('cancel');
    if (!is_null($cancel)) {
      return Response::redirect("/");
    }
 
    $validator = Validators::addProductValidator();
 
    $message = "";
    try {
      $validated = $validator->run(Input::post());
      if (!$validated) {
        throw new Exception();
      }
      $validData = $validator->validated();
 
      $book = Model_Product::forge();
      $book->name = $validData['name'];
      $book->category = $validData['category'];
      $book->price = $validData['price'];
	  $book->description = $validData['description'];
	  $book->photo_file = $validData['photo_file'];
      $book->save();
 
      return Response::redirect("/cart/showProduct/$book->id");
    }
    catch (Exception $ex) {
      $message = $ex->getMessage();
    }
 
    // If we get here, we have an error of some kind.
    $data = [
        
        'name' => Input::post('name'),
        'category' => Input::post('categories'),
        'price' => Input::post('price'),
		'description' => Input::post('description'),
		'photo_file' => Input::post('photo_file'),
        'message' => $message,
    ];
 
    $view = View::forge("admin/addProduct.tpl", $data);
    $view->set_safe('validator', $validator); // pass validator
    return $view;
  }
}
