<?php

namespace App;

class Cart{
  public $unique_products =null;
  public $totalQty =0;
  public $totalPrice =0;

  public function __construct($oldCart){
    if ($oldCart){
      $this->unique_products = $oldCart->unique_products;
      $this->totalQty = $oldCart->totalQty;
      $this->totalPrice = $oldCart->totalPrice;
    }
  }

  public function addToCart($product, $product_id){
    $stored_existing_item = [
      'qty' => 0,
      'price' => $product->price,
      'item' => $product
    ];

    if ($this->unique_products){
      if(array_key_exists($product_id, $this->unique_products)){
        $stored_existing_item = $this->unique_products[$product_id];
      }
    }

    $stored_existing_item['qty']++;
    $stored_existing_item['price'] = $product->price * $stored_existing_item['qty'];

    $this->unique_products[$product_id] = $stored_existing_item;
    $this->totalQty ++;
    $this->totalPrice += $product->price;

  }

}
