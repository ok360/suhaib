<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
//        $this->store ();
        $students =  Student::all ();

//        return dd ($students);
        return view('student.index',compact ('students'));
    }

    public function store()
    {
        Student::create(['name'=>'Saif']);
    }
}
