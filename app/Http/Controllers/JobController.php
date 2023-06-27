<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function register_admin()
    {
        return view('register_admin');
    }

    public function about_us()
    {
        return view('about_us');
    }

    public function contact_us()
    {
        return view('contact_us');
    }

    public function products()
    {
        return view('products');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function perfil()
    {
        return view('perfil');
    }

    public function register_cake()
    {
        return view('register_cake');
    }

    public function orders()
    {
        return view('orders');
    }

}