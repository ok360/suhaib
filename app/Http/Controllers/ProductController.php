<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
          $products = Product::all ();

        return view ('product.index',compact ('products'));
    }
    public  function show($id , $id2)
    {
      return $id+$id2;
    }
    public function create()
    {
        return view('product.create');
    }

    public  function store(Request $request)
    {


//            return  dd ($request);

        Product::create([
            'title'=>$request->title
                        ]);
    return redirect ('product');
    }
}
