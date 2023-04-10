<?php

namespace App\Http\Controllers;

use App\Repository\iAdminRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $admin;

    public function __construct(iAdminRepository $admin) {
        $this->admin = $admin;
    }

    public function adminGetAllProducts() {
        $products = $this->admin->adminGetAllProducts();
        return view('admin.products')->with('products', $products);
    }

    public function adminGetAllComments() {
        $comments = $this->admin->adminGetAllComments();
        return view('admin.comments')->with('comments', $comments);
    }

    public function adminDeleteProduct($id) {
        $this->admin->adminDeleteProduct($id);
        return redirect('admin/products');
    }

    public function adminDeleteComment($id) {
        $this->admin->adminDeleteComment($id);
        return redirect('admin/products/comments');
    }

}
