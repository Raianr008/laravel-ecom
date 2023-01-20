<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;

class ProductController extends Controller
{
    //
    function index(){

        $data=product::all();

        return view('product',['products'=>$data]);
    }
    function detail($id){
        $data= product::find($id);
        return view('detail',['products'=>$data]);
    }

    function addTocart(Request $req){
        if($req->session()->has('user')){
            
            $cart=new cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/'); 

        }else{
            return redirect('/login'); 
        }
    }
}
