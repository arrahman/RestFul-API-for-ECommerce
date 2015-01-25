<?php

use Faker\Factory as Faker;

class ApiTester extends TestCase {


	protected $faker;

	function __construct()
	{
		$this->faker = Faker::create();
	}

	public function getJson($url, $method = 'GET', $param = [])
	{
		return json_encode($this->call($method, $url, $param )->getContent());
	}

}