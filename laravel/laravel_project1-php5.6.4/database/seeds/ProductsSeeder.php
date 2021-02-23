<?php

use Illuminate\Database\Seeder;
use App\Products;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
        	'name' => 'Computer',
        	'sku' => 'c-10',
        	'price' => '100',
        	'quantity' => '10',
        	'in_stock' => '8'
        ],
        [
        	'name' => 'Mouse',
        	'sku' => 'm-10',
        	'price' => '200',
        	'quantity' => '20',
        	'in_stock' => '18'
        ],
        [
        	'name' => 'Keyboard',
        	'sku' => 'k-10',
        	'price' => '300',
        	'quantity' => '10',
        	'in_stock' => '7'
        ],
        [
        	'name' => 'Sound',
        	'sku' => 's-10',
        	'price' => '200',
        	'quantity' => '10',
        	'in_stock' => '6'
        ],
        [
        	'name' => 'Headphone',
        	'sku' => 'hd-10',
        	'price' => '700',
        	'quantity' => '20',
        	'in_stock' => '18'
        ]
    );
    }
}
