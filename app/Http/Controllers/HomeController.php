<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        // if($request){
        //     $busqueda = trim($request->get('buscarpor'));
        //     $produc = Product::where('product_name','like','%'.$busqueda.'%')
        //     ->orderBy('id','asc')
        //     ->get();
        // }return view('user_template.home', ['allproducts'=>$produc,'buscarpor'=>$busqueda]);
      
        return view('user_template.home', compact('allproducts'));
    }
    public function buscador(){
      
    }
}
