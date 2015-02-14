## RestFul API for Ecommerce using Laravel 

![Build Status](https://travis-ci.org/arrahman/RestFul-API-for-ECommerce.svg?branch=master)

The project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

## Installation

Clone the project

Create database 'ecommerce' or your preferred name.

Change the app/config/database.php file according to your database setting.

Rub migrate to create the all the table.

Run seeder to seed the database with Faker.

````
	php artisan migrate
	php artisan db:seed

````

Make a get request to check the installation:

http://localhost/restful/public/v1/categories
