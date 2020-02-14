<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $reservations = Reservation::where('served','0');

        return view('Admin.dashboard',['reservations' => $reservations]);
    }

    public function tables()
    {
        $reservations = Reservation::all();
        $dishes = Dish::all();
        return view('Admin.tables',['reservations'=>$reservations,'dishes'=>$dishes]);
    }

    public function create()
    {
        $dishes = Dish::all();
        $reservations = Reservation::all();
        return view('Admin.create',[
            'dishes'=>$dishes,
            'reservations'=>$reservations
        ]);
    }

    public function storeDish()
    {
        $data = $this->validatedData();


        Dish::create($data);

        return redirect()->back();

    }

    public function editDish(Dish $dish)
    {

        return view('Admin.edit',compact('dish'));
    }

    public function updateDish(Dish $dish)
    {
         $dish->update($this->validatedData());

        return redirect('admin/tables');
    }

    public function destroyDish(Dish $dish)
    {
        $dish->delete();

        return redirect('admin/tables');
    }
    public function validatedData()
    {
       return request()->validate([
            'name'=>'required',
            'catogry'=>'required',
            'price'=>'required|integer',
            'desc'=>'max:200'
        ]);
    }
}
