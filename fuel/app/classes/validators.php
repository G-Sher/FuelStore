<?php

class Validators {
  
	public static function addProductValidator() 
	{    
		$isUnique = function($name) {
			$productWithName = Model_Product::find('first', [
				'where' => [
				[ 'name', $name ]
				]
			]);

			return is_null($productWithName);      
		};

		$validator = Validation::forge();

		// add in all fields set by the form

		$validator->add('name', 'name')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('min_length', 3)
			->add_rule(['unique' => $isUnique])
		;

		$validator->add('quantity', 'quantity')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('match_pattern', '/^\d+$/')
		;

		// enter all fields, regardless of whether can generate errors or not
		$validator->add('binding', 'binding');

		// modify error messages
		$validator
			->set_message('required', ':label cannot be empty')
			->set_message('min_length', 'at least :param:1 char(s)')
			->set_message('unique', 'a duplicate exists')
		;

		$validator
			->field('quantity')
			->set_error_message('match_pattern', 'must be non-neg. integer')
		;    

		return $validator;
	}
 
	public static  function modifyProductValidator($book_id) 
	{
		$isUnique = function($title, $book_id) 
		{
			$bookWithTitle = Model_Book::find('first', [
				'where' => [
					[ 'title', $title ]
				]
			]);
		
			return is_null($bookWithTitle) || $bookWithTitle->id == $book_id;
		};
 
		$validator = Validation::forge();
 
		// add in all fields set by the form
 
		$validator->add('title', 'title')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('min_length', 3)
			// application of the unique rule is different here than add
			->add_rule(['unique' => $isUnique], $book_id)
		;
		
		$validator->add('quantity', 'quantity')
			->add_rule('trim')
			->add_rule('required')
			->add_rule('match_pattern', '/^\d+$/')
		;
 
		// enter all fields, regardless of whether can generate errors or not
		$validator->add('binding', 'binding');
 
		// modify error messages
		$validator
			->set_message('required', ':label cannot be empty')
			->set_message('min_length', 'at least :param:1 char(s)')
			->set_message('unique', 'a duplicate exists')
		;
		
		$validator
			->field('quantity')
			->set_error_message('match_pattern', 'must be non-neg. integer')
		;    
 
		return $validator;
	}
	
	public static function addCategoryValidator()
	{
		$isUnique = function($name) {
			$categoryWithName = Model_Category::find('first', [
				'where' => [
				[ 'name', $name ]
				]
			]);

			return is_null($categoryWithName);      
		};
		
		$validator = Validation::forge();
		
		$validator->add('name','name')
				->add_rule('trim')
				->add_rule('min_length',1);
		
		$validator
				->field('name')
				->set_error_message('unique', 'A duplicate exists')
				->set_error_message('min_length','Needs at least 1 character');
		
		return $validator;
	}
}
