<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function product()
    {
        return view('product');
    }
    public function details()
    {
        return view('details');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
}
