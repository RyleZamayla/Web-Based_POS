<?php

  namespace App\Repository;

use App\Models\Product;

  class productRepository implements iProductRepository {

    public function getAllProducts()
    {
      return Product::all();
    }

    public function createProduct(array $data)
    {
      Product::insert([
        'picture' => $data['picture'],
        'title' => $data['title'],
        'price' => $data['price'],
        'description' => $data['description']
      ]);
    }

    public function getSingleProduct($id)
    {
      return Product::find($id);
    }

    public function editProduct($id)
    {
      return Product::find($id);
    }

    public function updateProduct($id, array $data)
    {
      Product::find($id)->update([
        'picture' => $data['picture'],
        'title' => $data['title'],
        'price' => $data['price'],
        'description' => $data['description']
      ]);
    }

  }


?>