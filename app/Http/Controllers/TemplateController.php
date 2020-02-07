<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $name = 'Home';
        return view('index',compact('name'));
    }

    public function menu()
    {
        $name = 'Menu';
        return view('menu',compact('name'));
    }
    public function services()
    {
        $name = 'Services';
        return view('services' , compact('name'));
    }
    public function reservation()
    {
        $name = 'Reservation';
        return view('reservation' , compact('name'));
    }
    public function about()
    {
        $name = 'About';
        return view('about' , compact('name'));
    }
    public function blog()
    {
        $name = 'Blog';
        return view('blog' , compact('name'));
    }
    public function specialties()
    {
        $name = 'Specialties';
        return view('specialties' , compact('name'));
    }
    public function contact()
    {
        $name = 'Contact';
        return view('contact' , compact('name'));
    }
}
