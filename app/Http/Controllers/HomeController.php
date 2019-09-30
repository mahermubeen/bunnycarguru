<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

<<<<<<< HEAD
    public function cart()
    {
        return view('cart');
    }

    public function searchByCar()
    {
        return view('searchByCar');
=======
    public function searchByCar()
    {
        return view('searchByCar');
    }

    public function cart()
    {
        return view('cart');
>>>>>>> efb2db1da53d14eec0c381ff9b67a5a8492f47de
    }
}
