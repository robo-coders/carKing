<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;
use App\user_info;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
    public function register_user(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'required|confirmed|min:6',
        ]);
        $store = new user;
        $store->name = $request->name;
        $store->email = $request->email;
        $password = $request->password;
        $store->password = bcrypt($password);
        $store->save();
        $storeUserInfo = new user_info();
        $storeUserInfo->user_id = $store->id;
        $storeUserInfo->referral_id = $request->referral_id;
        $storeUserInfo->save();
        return redirect('/redirect/user');

        

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name'=>'Normal User']);
        // Permission::create(['name'=>'normal use']);

        // $role = Role::findById('3');
        // $permission = Permission::findById('3');
        // $role->givePermissionTo($permission);

        // Auth::user()->givePermissionTo('manage cars');
        // Auth::user()->assignRole('Car Agent');
        
        // return Auth::user()->permissions;
        // return Auth::user()->getAllPermissions();

        // return User::role('normal user')->get();
        return redirect('/');
    }
}
