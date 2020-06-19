<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;
use App\car;
use App\commission;
use App\broker_wallet;

class brokerController extends Controller
{
    public function brokerWallet($id)
    {
        if (Broker_wallet::where('user_id',$id)->exists()) {
            $wallet = broker_wallet::where('user_id',$id)->first();
            return view('admin.edit_broker_wallet',compact('id','wallet'));
        }else{
            return view('admin.edit_broker_wallet',compact('id'));
        }
    }
    public function updateWallet(Request $request,$id)
    {
        if (Broker_wallet::where('user_id', '=', $id)->exists()) {
            $store = broker_wallet::where('user_id',$id)->first();
            $store->wallet = $request->price;
            $store->save();
         }else{
            $store = new broker_wallet();
            $store->user_id = $id;
            $store->wallet = $request->price;
            $store->save();
         }
        session()->flash('message','Broker wallet has been updated.');
        return back();
}
    public function buyCar($id)
    {
        $car = car::find($id);
        $car_price = $car->price;
        $auth_balance = broker_wallet::where('user_id',Auth::User()->id)
        ->first();
        $auth_balance = $auth_balance->wallet;
        if($auth_balance > $car_price){
            //Blance update
                $auth_balance = $auth_balance - $car_price;
                $store = broker_wallet::where('user_id',Auth::User()->id)
                ->first();
                $store->wallet = $auth_balance;
                $store->save(); 
            // Commissions Table start
                $store = new Commission();
                $store->user_id = Auth::User()->id;
                $store->car_id = $id;
                $store->csp = $car_price;
            //Total Profit / csp
                $csp = $car_price*6/100;
                $store->total_profit = $csp;
            //Admin Account
                $admin_account = $csp*30/100;
                $store->admin_account = $admin_account;
            //TP
                $tp = $csp*70/100;
                $store->tp = $tp;
            //New Tp
                $new_tp = $tp;  
                $store->new_tp = $new_tp;
            //PA
                $pa = $new_tp*60/100;
                $store->pa = $pa; 
            //agent 1
                $agent_1 = $pa*5/100;
                $store->agent_1 = $agent_1; 
            //agent 2
            $agent_2 = $pa*10/100;
            $store->agent_2 = $agent_2;         
                //If Broker Exists - condition starts
                    $agent_3 = $pa*42.5/100;
                    $store->agent_3 = $agent_3; 
                    //Broker
                    $broker = $pa*42.5/100;
                    $store->broker = $broker; 
                    //Broker 1
                    $broker_1 = $broker*5/100;
                    $store->broker_1 = $broker_1; 
                    //Broker 2
                    $broker_2 = $broker*10/100;
                    $store->broker_2 = $broker_2; 
                    //Broker 3
                    $broker_3 = $broker*5/100;
                    $store->broker_3 = $broker_3;
                //If condition ends     
                //Else starts
                // $complete_agent_3 = $pa*85/100;
                // $store->complete_agent_3 = $complete_agent_3;
                //Else ends
            $store->save();
            // Commissions Table end
            session()->flash('success','Congrats! You have bought this car.');
            return back();
        }else{
            session()->flash('delete','Sorry! insufficent balance.');
            return back();
        }
    }
}
