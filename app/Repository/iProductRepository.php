<?php

  namespace App\Repository;
  
  interface iProductRepository {

    public function getAllProducts();
    
    public function createProduct(array $data);



  }


?>