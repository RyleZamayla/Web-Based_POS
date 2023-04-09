<?php

  namespace App\Repository;

use App\Models\Product;

  class productRepository implements iProductRepository {

    public function getAllProducts()
    {
      return Product::all();
    }

  }


?>