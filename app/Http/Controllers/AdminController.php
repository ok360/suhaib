<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
//        if ()
        //user authentication

        return redirect ('login');


//        return 'Admin Dashboard';
    }
    public function report()
    {
        return 'Admin reports';
    }

}
