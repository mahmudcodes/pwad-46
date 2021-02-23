<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        
        Products::truncate();
        
        foreach(range(1, 50) as $index ){
        	
        	Products::create([
        		'name' => $facker->sentence(1),
	        	'sku' => $facker->sentence(1),
	        	'price' => $facker->sentence(1),
	        	'quantity' => $facker->sentence(1),
	        	'in_stock' => $facker->sentence(1)
        	]);
        }
    }
}
