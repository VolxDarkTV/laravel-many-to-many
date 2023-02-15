<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model
use App\Models\Product;


class ProductController extends Controller
{
    public function productShow(Product $product){

        return view('pages.productShow', compact('product'));
    }
}
