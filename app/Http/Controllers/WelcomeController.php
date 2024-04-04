<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function signup(){
        return view('signup');
    }
    public function process_signup(Request $request){
        return view('index',['data'=>$request]);
    }
    public function page($page="index"){
        $products = Product::orderBy('id')->get();
        return view($page,['data'=>$products]);
    }
}
