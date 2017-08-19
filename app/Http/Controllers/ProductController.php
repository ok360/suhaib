<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
            $names=['Mobile','Laptop','Tablet'];

        return view ('product.index',compact ('names'));
    }
    public  function show($id , $id2)
    {
      return $id+$id2;
    }
}
