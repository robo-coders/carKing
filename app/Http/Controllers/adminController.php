<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;
use App\car;
use App\car_owner;
use App\car_agent;
use App\car_broker;
class adminController extends Controller
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
   
    public function redirect_user()
    {
        return redirect('/dashboard');   
    }
    public function agentList()
    {
        $agents = user::has('agents')
        ->with('agents')
        ->get();
        return $agents;
        return view('admin.agent',compact('agents'));
    }
    public function brokerList()
    {
        $brokers = user::has('brokers')
        ->with('brokers')
        ->get();
        return view('admin.broker',compact('brokers'));
    }
}