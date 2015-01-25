<?php

class CategoriesTest extends ApiTester {

	public function test_Get_All_Categories()
	{
	 	$categories = $this->getJson('v1/categories');
	 	$this->assertResponseOk();
	}

	public function test_Get_Single_Categories_Valid_Id()
	{
	 	$categories = $this->getJson('v1/categories/1');
 	 	$this->assertResponseOk();
	}

	public function test_Get_Single_Categories_Invalid_Id()
	{
		$categories = $this->getJson('v1/categories/x');
 	 	$this->assertResponseStatus(404);
	}

	public function test_Post_Categories_With_Valid_Data()
	{
	 	$categories = $this->getJson('v1/categories', 'POST', $this->makeCategories());
	 	$this->assertResponseStatus(201);
	}

	public function test_Post_Categories_Invalid_Data()
	{
	 	$categories = $this->getJson('v1/categories', 'POST');
	 	$this->assertResponseStatus(404);
	}

	//Use if we need to create a new record
	public function makeCategories()
	{
		return [
					'name' => $this->faker->sentence(1),
					'status' => 1
				];
	}
}