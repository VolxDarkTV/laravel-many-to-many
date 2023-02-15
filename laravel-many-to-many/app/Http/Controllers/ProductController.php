<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model
use App\Models\Product;
use App\Models\Typology;
use App\Models\Category;



class ProductController extends Controller
{
    // ---Show
    public function productShow(Product $product){

        return view('pages.productShow', compact('product'));
    }
    // ---Create
    public function productCreate(){

        $typologies = Typology::all();
        $categories = Category::all();

        return view('pages.productCreate', 
            compact('typologies', 'categories'));
    }
    // ---Store
    public function productStore(Request $request){

        $data = $request -> validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|integer',
            'weight' => 'required|integer',
            'typology' => 'required|string',
            'categories' => 'required|array',
        ]);

        $code = rand(10000, 99999);
        $data['code'] = $code;

        // typology
        $product = Product::make($data);
        $typology = Typology::find($data['typology']);

        $product -> typology() -> associate($typology);
        $product -> save();

        // categories
        $categories = Category::find($data['categories']);
        $product -> categories() -> attach($categories);

        return redirect() -> route('home');
    }

    // ---Edit
    public function productEdit(Product $product){

        $typologies = Typology::all();
        $categories = Category::all();

        return view('pages.productEdit', 
            compact('product', 'typologies', 'categories'));
    }
    // ---Update
    public function productUpdate(Request $request, Product $product){

        $data = $request -> validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|integer',
            'weight' => 'required|integer',
            'typology' => 'required|string',
            'categories' => 'required|array',
        ]);

        $product -> update($data);
        $typology = Typology::find($data['typology']);

        $product -> typology() -> associate($typology);
        $product -> save();

        $categories = Category::find($data['categories']);
        $product -> categories() -> sync($categories);

        return redirect() -> route('home');
    }


}
