<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductsController;

class HomeController extends Controller
{
    public function index(){
        $products = app(ProductsController::class)->getProHome();
        return view('frontend.home', ['products' => $products]);
    }
}
