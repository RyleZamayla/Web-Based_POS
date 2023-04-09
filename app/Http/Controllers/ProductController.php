<?php

namespace App\Http\Controllers;

use App\Repository\iProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $product;

    public function __construct(iProductRepository $product)
    {
        
    }

    public function index () {

    }
}
