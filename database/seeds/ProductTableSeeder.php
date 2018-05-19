<?php

use Illuminate\Database\Seeder;
use App\Product as Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'Hannibal',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 14.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_2.jpg',
        'title' => 'Hannibal',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 14.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'Hannibal',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 14.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_3.jpg',
        'title' => 'Hannibal',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 14.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_2.jpg',
        'title' => 'Hannibal',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 14.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'Hannibal',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 14.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_3.jpg',
        'title' => 'Hannibal',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 14.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_2.jpg',
        'title' => 'Hannibal',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 14.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'Hannibal',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 14.99
      ]);
      $product->save();

    }
}
