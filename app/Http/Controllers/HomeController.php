<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class HomeController extends Controller
{
    //
    public function index(){
        $data=Http::get('https://dummyjson.com/products');

        return view('index',['data'=>$data->collect('products')]);
    }

    public function single($id){
        $data=Http::get('https://dummyjson.com/products/'.$id);
        return view('single',['data'=>$data->collect()]);
    }
}
