<?php
namespace Database\Seeders;
use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = array(
            array("category_id" => 1 ,"slug" => "tanaman-1", "product_name" => "tanaman 1", "product_detail" => "Shoes Detail", "original_price" => 150, "product_price" => 100),
            array("category_id" => 1, "slug" => "tanaman-1", "product_name" => "tanaman 1", "product_detail" => "Bags Detail", "original_price" => 1250, "product_price" => 1000),
            array("category_id" => 1, "slug" => "tanaman-1", "product_name" => "tanaman 1", "product_detail" => "Bags Detail", "original_price" => 1250, "product_price" => 1000),
            array("category_id" => 2, "slug" => "mediatanam-1", "product_name" => "mediatanam 1", "product_detail" => "Bags Detail", "original_price" => 1250, "product_price" => 1000),
            array("category_id" => 2, "slug" => "mediatanam-1", "product_name" => "mediatanam 1", "product_detail" => "Bags Detail", "original_price" => 1250, "product_price" => 1000),
            array("category_id" => 2, "slug" => "mediatanam-1", "product_name" => "mediatanam 1", "product_detail" => "Bags Detail", "original_price" => 1250, "product_price" => 1000),

       );

        foreach ($products as $product)
        {
            Product::create($product);
        }
    }
}
