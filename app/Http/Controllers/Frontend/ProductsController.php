<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductImage;
class ProductsController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','desc')->get();
        return view('frontend.pages.product.index')->with('products',$products);
    }
    public function show($slug){
        // $products = Product::orderBy('id','desc')->get();
        // return view('pages.product.index')->with('products',$products);
    }
}
