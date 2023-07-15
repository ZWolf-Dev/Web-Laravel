<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
        // $products = DB::select("SELECT * FROM products");
        // $products = DB::table("products")->get();
        return view('products.index');
    }
    
    public function show($id){
        $product = Product::find($id);
        return view('products.show')->with('product', $product);
    }

    public function getProHome(){
        $products = DB::table('products')
        ->join('brands', 'products.brandid', '=', 'brands.id')
        ->select('products.*', 'brands.title')
        ->take(9)
        ->get();  
        return $products;
    }
}
