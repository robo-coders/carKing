<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;
use App\car;
use App\car_agent;
class marketPlaceController extends Controller
{
    public function carsForSale()
    {
        $cars = car::where('status','=','1')->get();
        return view('marketPlace.carsForSale',compact('cars'));
    }
}
