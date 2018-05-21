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
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'Harry Potter & Deathly Hallows',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 22.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_2.jpg',
        'title' => 'Hannibal Rises',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 10.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'The Family',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 24.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_3.jpg',
        'title' => 'Silence of The Lambs',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 10.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_2.jpg',
        'title' => 'Lord of the Rings',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 34.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'The Godfather',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 28.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'Pet Semetary',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 9.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'Red Dragon',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 16.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_3.jpg',
        'title' => 'The Sicilian',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 11.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_2.jpg',
        'title' => 'Lord of the Rings II ',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 37.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'Harry Potter & The Goblet of Fire',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 33.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'The Shining',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 21.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'Harry Potter & Prisoner of Azkaban',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 13.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'It',
        'description' => 'Very Chilling Lorem Ipsum story Thriller',
        'price' => 25.99
      ]);
      $product->save();

    }
}
