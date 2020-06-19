<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;
use App\car;
use App\car_agent;
class agentController extends Controller
{
    public function car_need_agent_index()
    {
        $cars = car::where('status','=','0')
        ->get();
        return view('agent.carsNeedAgent',compact('cars'));
    }
    public function car_need_agent($id)
    {
        $owner = user::find(Auth::user()->id);
        $owner->agents()->attach($id);

        // $store = new car_agent();
        // $user_id = Auth::user()->id;
        // $store->agent_id = $user_id; //user id as an agent id
        // $store->car_id = $id;
        // $store->save();

        $car = car::find($id);
        $car->status = "1";
        $car->save();
        return redirect('/mycars')->withSuccess('Congrat! you have been registered as an agent');
    }
}
