<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Reservation;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $name = 'Home';
        $mains = Dish::where('catogry' , 'main')->get();
        $desserts = Dish::where('catogry' , 'dessert')->get();
        $drinks = Dish::where('catogry' , 'drink')->get();
        return view('index',['name'=>$name , 'mains'=>$mains , 'desserts'=>$desserts, 'drinks'=>$drinks]);
    }

    public function menu()
    {
        $name = 'Menu';

        $mains = Dish::where('catogry' , 'main')->get();
        $desserts = Dish::where('catogry' , 'dessert')->get();
        $drinks = Dish::where('catogry' , 'drink')->get();
        return view('menu',['name' => $name,'mains'=>$mains , 'desserts'=>$desserts, 'drinks'=>$drinks]);
    }
    public function services()
    {
        $name = 'Services';
        return view('services' , compact('name'));
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

    public function reservation()
    {
        $reservation = new Reservation();
        $name = 'Reservation';
        return view('reservation',['reservation' => $reservation,'name' => $name]);
    }
    public function contact()
    {
        $name = 'Contact';
        return view('contact' , compact('name'));
    }
}
