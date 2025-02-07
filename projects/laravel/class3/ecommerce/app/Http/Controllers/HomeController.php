<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function home()
    {
        return view('home');
    }

    public function blogs()
    {
        return view('blogs');
    }

    public function contact()
    {
        return view('contact');
    }

    public function products()
    {
        return view('products');
    }

    public function testimonial()
    {
        return view('testimonial');
    }
    
    public function about()
    {
        return view('about');
    }
}
