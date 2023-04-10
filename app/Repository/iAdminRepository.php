<?php

  namespace App\Repository;
  
  interface iAdminRepository {

    public function adminGetAllProducts();
    
    public function adminGetAllComments();

    public function adminDeleteProduct($id);

    public function adminDeleteComment($id);

  }


?>