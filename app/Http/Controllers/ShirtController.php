<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShirtController extends Controller
{
    public function shirts(){
    	$data = Product::orderBy('id', 'DESC')->paginate(12);
        return view('user.shirts')->with('data', $data);
    }

    public function detail($id)
    {
        $data = Product::find($id);
        return view('user.shirt')->with('data', $data);
    }
}
