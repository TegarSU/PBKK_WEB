<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    public function index()
    {
    	return view('form');
    }

    public function submit(Request $request)
    {
    	$name = $request->nama;
    	$pass = $request->password;

    	return view('hasil',compact('name','pass'));
    }

    // public function calculator()
    // {
    //     return view('calculator');
    // }
}
