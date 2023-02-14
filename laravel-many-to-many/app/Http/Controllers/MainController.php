<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model
use App\Models\Category;

class MainController extends Controller
{
    public function home(){

        $categories = Category::all();

        return view('pages.home', compact('categories'));
    }

    public function productShow(Category $category){

        return view('pages.productShow', compact('category'));
    }
}
