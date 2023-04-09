<?php

namespace App\Http\Controllers;

use App\Repository\iProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $product;

    public function __construct(iProductRepository $product)
    {
        $this->product = $product;
    }

        

    public function index () {

        $products = $this->product->getAllProducts();
        return view('product.index')->with('products', $products);

    }

    public function create () {
        return view('product.create');
    }
}
