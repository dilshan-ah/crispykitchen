<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $products = Product::all();

        return view("frontend/index",compact('products'));
    }

    public function menu(){
        $products = Product::all();

        return view("frontend/menu",compact('products'));
    }

    public function update(){
        return view("frontend/update");
    }

    public function about(){
        return view("frontend/about");
    }

    public function contact(){
        return view("frontend/contact");
    }
}
