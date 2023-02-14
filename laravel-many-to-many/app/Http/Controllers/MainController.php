<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model
use App\Models\Category;
use App\Models\Product;
use App\Models\Typology;

class MainController extends Controller
{
    public function home(){

        
        return view('pages.home');
    }
}
