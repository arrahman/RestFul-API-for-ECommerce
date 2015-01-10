<?php

class CategoriesTableSeeder extends Seeder {

	public function run()
	{

		DB::statement("SET foreign_key_checks = 0");
		DB::table('categories')->truncate();
		DB::statement("SET foreign_key_checks = 1");

		$categories = array('Electronics', 'Home Appliance', 'Fashion');

		$subCategories = array('Computers', 'TV', 'Camera', 'Gaming');

		$i=0;

		foreach(range(1, 3) as $index)
		{
			Categories::create([

			'parent_id' => 0,
			'name'		=> $categories[$i],
			'status'	=> 1
			]);

			$i++;
		}

		$i=0;

		foreach(range(4, 7) as $index)
		{
			Categories::create([

			'parent_id' => 1,
			'name'		=> $subCategories[$i],
			'status'	=> 1
			]);

			$i++;
		}
	}
}