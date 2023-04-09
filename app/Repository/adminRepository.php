<?php

  namespace App\Repository;

  use App\Models\Product;
  use App\Models\Comment;


  class adminRepository implements iAdminRepository {

    public function adminGetAllProducts()
    {
      return Product::all();
    }

    public function adminGetAllComments()
    {
      return Comment::all();
    }

    

  }


?>