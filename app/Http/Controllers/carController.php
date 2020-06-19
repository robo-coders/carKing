<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;
use App\car;
use App\car_owner;
use App\car_agent;
use App\car_broker;
class carController extends Controller
{
    public function car_list()
    {
        // $cars = car::with('users')
        // ->get();

        $cars = auth()->user()->cars;
        
        // $agents = car_agent::where('agent_id','=',Auth::user()->id)->get();
        $agents = auth()->user()->agents;
        // $countBroker = car_broker::groupby('car_id')->count();
        // return $countBroker;
        $brokers = auth()->user()->brokers;
        return view('cars.myCarsList',compact('cars','agents','brokers'));
    }
   
    public function car_list_index()
    {
        return view('cars.create');
    }
    public function car_list_create(Request $request)
    {
        $store = new car();
        $store->title = $request->title;
        $store->type = $request->type;
        $store->make = $request->make;
        $store->model = $request->type;
        $store->year = $request->type;
        $store->variant = $request->variant;
        $store->engineCapacity = $request->type;
        $store->transmission = $request->transmission;
        $store->seatCapacity = $request->seatCapacity;
        $store->mileage = $request->mileage;
        $store->color = $request->color;
        $store->price = $request->price;
        $store->description = $request->description;
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $path = $request->file('avatar')->storeAs(
                'public/myCars', time().".".$request->file('avatar')->extension()
            );
            $path = str_replace("public", "storage", $path);
            $store->avatar = $path;
            $store->save();
        }
        $store->save();
        //Store Car User Table
            $owner = user::find(Auth::user()->id);
            $owner->cars()->attach($store->id);
        // $storeOwner = new car_owner();
        // $storeOwner->user_id = Auth::user()->id;
        // $storeOwner->car_id	 = $store->id;
        // $storeOwner->save();

        return redirect('/mycars')->withSuccess('Car has been adedd to your list.');
    }
    public function mycarDetails($id)
    {
        $id = $id;
        $agents = user::where('id','=',$id)->get();
        return view('cars.myCarsDetails',compact('id','agents'));
    }
    //Broker Functions
    public function applyBroker($id)
    {
        $agent = user::find(Auth::user()->id);
        $agent->brokers()->attach($id);
        return redirect('/mycars')->withSuccess('Congrats! you have been registered as Broker');
    }
}
