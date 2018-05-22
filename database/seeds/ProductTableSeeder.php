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
        'description' => 'Very Chilling Thriller written by Thomas Harris',
        'price' => 14.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'Harry Potter & Deathly Hallows',
        'description' => 'JK Rowling creates a final installment to HP',
        'price' => 22.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_2.jpg',
        'title' => 'Hannibal Rises',
        'description' => 'Why not put Lorem Ipsum here because got no idea of the desc',
        'price' => 10.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'The Family',
        'description' => 'Thriller and Crime Drama by Mario Puzo',
        'price' => 24.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_3.jpg',
        'title' => 'Silence of The Lambs',
        'description' => 'Very Chilling Lorem Ipsum Thriller Dolor Silit',
        'price' => 10.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_2.jpg',
        'title' => 'Lord of the Rings',
        'description' => 'Need to put some dummy text here',
        'price' => 34.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'The Godfather',
        'description' => 'Crime Thriller about Mafia and Mob by Mario Puzo',
        'price' => 28.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'Pet Semetary',
        'description' => 'Novel by Stephen King, the classic old stuff',
        'price' => 9.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'Red Dragon',
        'description' => 'Awesome thriller by Thomas Harris, the first of Hannibal Lector',
        'price' => 16.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_3.jpg',
        'title' => 'The Sicilian',
        'description' => 'Sicilian drama by Mario Puzo put lorem ipsum here and there',
        'price' => 11.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_2.jpg',
        'title' => 'Lord of the Rings II ',
        'description' => 'Dummy Text combined with lorem ipsum makes great lines',
        'price' => 37.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'Harry Potter & The Goblet of Fire',
        'description' => 'Story by JK Rowling insert some random for this product',
        'price' => 33.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'The Shining',
        'description' => 'The film was as good as the book, Stephen King does a lorem ipsum',
        'price' => 21.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'Harry Potter & Prisoner of Azkaban',
        'description' => 'Very Chilling Lorem Ipsum story Thriller Rowling generator dummy text',
        'price' => 13.99
      ]);
      $product->save();


      $product = new Product([
        'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'title' => 'It',
        'description' => 'Got no idea must be Very Chilling Lorem Ipsum story Thriller by King',
        'price' => 25.99
      ]);
      $product->save();

    }
}
