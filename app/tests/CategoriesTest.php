<?php

class CategoriesTest extends TestCase {

	/**
	 * Categories Test.
	 *
	 * @return void
	 */

	public function testCategories(){

	 	$this->getJson('v1/categories');

	 	$this->assertResponseOk();
	}

	public function getJson($url){

		return json_encode($this->call('GET', $url)->getContent());

	}

}
