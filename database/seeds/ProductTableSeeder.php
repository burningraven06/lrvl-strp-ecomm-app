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
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'imgPath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOE5b4MASgwvJGjellBO6qaYU3I_Cap2xraScAUrVv8ZAFI7fA',
        'title' => 'Hannibal',
        'description' => 'Very Chilling Thriller written by Thomas Harris',
        'price' => 14.99
      ]);
      $product->save();


      $product = new Product([
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'imgPath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRD30gL2h4pO4sh50XfL5SMzxyACsmMq0E4M768TAh3g8rDBfPu',
        'title' => 'Harry Potter Deathly Hallows',
        'description' => 'JK Rowling creates a final installment to HP',
        'price' => 22.99
      ]);
      $product->save();


      $product = new Product([
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_2.jpg',
        'imgPath' => 'https://images-na.ssl-images-amazon.com/images/I/41Ii8cSLcXL._SX307_BO1,204,203,200_.jpg',
        'title' => 'Hannibal Rising',
        'description' => 'Why not put Lorem Ipsum here because got no idea of the desc',
        'price' => 10.99
      ]);
      $product->save();


      $product = new Product([
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'imgPath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdId7ZXEC20z57Mrly8ewXWbI_qifxMDuKINLTyvGD0xLfsP97',
        'title' => 'The Family',
        'description' => 'Thriller and Crime Drama by Mario Puzo',
        'price' => 24.99
      ]);
      $product->save();


      $product = new Product([
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_3.jpg',
        'imgPath' => 'https://tieryas.files.wordpress.com/2013/07/sotl.jpg?w=812',
        'title' => 'Silence of The Lambs',
        'description' => 'Very Chilling Lorem Ipsum Thriller Dolor Silit',
        'price' => 10.99
      ]);
      $product->save();


      $product = new Product([
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_2.jpg',
        'imgPath' => 'https://images-na.ssl-images-amazon.com/images/I/51EstVXM1UL._SX331_BO1,204,203,200_.jpg',
        'title' => 'Lord of the Rings',
        'description' => 'Need to put some dummy text here',
        'price' => 34.99
      ]);
      $product->save();


      $product = new Product([
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'imgPath' => 'https://images-na.ssl-images-amazon.com/images/I/41Y2MEVGA4L._SX333_BO1,204,203,200_.jpg',
        'title' => 'The Godfather',
        'description' => 'Crime Thriller about Mafia and Mob by Mario Puzo',
        'price' => 28.99
      ]);
      $product->save();


      $product = new Product([
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'imgPath' => 'https://images-na.ssl-images-amazon.com/images/I/41Y2MEVGA4L._SX333_BO1,204,203,200_.jpg',
        'title' => 'Pet Semetary',
        'description' => 'Novel by Stephen King, the classic old stuff',
        'price' => 9.99
      ]);
      $product->save();


      $product = new Product([
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'imgPath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRU66E8qZOVG9lOijbj_qSz2wiY89KE76HjCc-BZO_Xtwnaaf4YBw',
        'title' => 'Red Dragon',
        'description' => 'Awesome thriller by Thomas Harris, the first of Hannibal Lector',
        'price' => 16.99
      ]);
      $product->save();


      $product = new Product([
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_3.jpg',
        'imgPath' => 'https://images.gr-assets.com/books/1427584738l/22026.jpg',
        'title' => 'The Sicilian',
        'description' => 'Sicilian drama by Mario Puzo put lorem ipsum here and there',
        'price' => 11.99
      ]);
      $product->save();


      $product = new Product([
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_2.jpg',
        'imgPath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlSpGEZTLfrpPIzHp7zANpNz-myJvnp2rWjIg3849nepK1yO2Zmg',
        'title' => 'Lord of the Rings II ',
        'description' => 'Dummy Text combined with lorem ipsum makes great lines',
        'price' => 37.99
      ]);
      $product->save();


      $product = new Product([
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'imgPath' => 'https://images-na.ssl-images-amazon.com/images/I/41AF6KHRGML.jpg',
        'title' => 'Harry Potter & The Goblet of Fire',
        'description' => 'Story by JK Rowling insert some random for this product',
        'price' => 33.99
      ]);
      $product->save();


      $product = new Product([
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'imgPath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStz1gP96HsYSzmy5rHeDtZBoSs8Jp-lA9NQZuCr0tHJi5_Jsu2',
        'title' => 'The Shining',
        'description' => 'The film was as good as the book, Stephen King does a lorem ipsum',
        'price' => 21.99
      ]);
      $product->save();


      $product = new Product([
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'imgPath' => 'http://d1vzko4h6qahek.cloudfront.net/images/2/books/large/HOI2.jpg',
        'title' => 'The Hobbit',
        'description' => 'Very Chilling Lorem Ipsum story Thriller generator dummy text',
        'price' => 13.99
      ]);
      $product->save();


      $product = new Product([
        // 'imgPath' => 'http://localhost:8000/images/dummy_product_1.jpg',
        'imgPath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJnSmAPDQHYr2ct_MnJ_KO2Eri1skFsv31jpskKRtMQdPAUGoH',
        'title' => 'It',
        'description' => 'Got no idea must be Very Chilling Lorem Ipsum story Thriller by King',
        'price' => 25.99
      ]);
      $product->save();

    }
}
