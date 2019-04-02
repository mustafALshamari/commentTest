<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;

class UiController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


  
}



