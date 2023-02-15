<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model
use App\Models\Product;
use App\Models\Typology;



class ProductController extends Controller
{
    public function productShow(Product $product){

        return view('pages.productShow', compact('product'));
    }

    public function productCreate(){

        $typologies = Typology::all();

        return view('pages.create', compact('typologies'));
    }
    public function productStore(Request $request){

        $data = $request -> validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|integer',
            'weight' => 'required|integer',
            'typology' => 'required|string',
        ]);

        $code = rand(10000, 99999);
        $data['code'] = $code;

        $product = Product::make($data);
        $typology = Typology::find($data['typology']);

        $product -> typology() -> associate($typology);
        $product -> save();

        return redirect() -> route('home');
    }
}
