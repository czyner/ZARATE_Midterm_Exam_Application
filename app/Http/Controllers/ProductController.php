<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data=array(
            "Anime"=>"Dan Machi",
        );
        return view('Anime', ['data'=>$data]);
    }
}
