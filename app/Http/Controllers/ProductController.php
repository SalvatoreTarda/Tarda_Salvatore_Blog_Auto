<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('product.create');
    }

    public function store(Request $request)
    {
        
        $name = $request->input('name');
        $brand = $request->input('brand');
        $description = $request->input('description');
        $price = $request->input('price');
        
        //? method save

        // $product = new Product();
        // $product->name = $name;
        // $product->brand = $brand;
        // $product->description = $description;
        // $product->price = $price;
        
        // $product->save(); 

        //? Method MassASSeitment

        Product::create(
            [
                "name"=>$name,
                "brand"=>$brand,
                "description"=>$description,
                "price"=>$price
            ]
        
            );
        return redirect()->route('home');
    }
}
