<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {    
	return view('landing');
});

Route::get('/logout', function () {    
	Auth::logout();
	return redirect('login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect/user', 'adminController@redirect_user')->name('redirect_user');

//User Registeration
Route::post('/reg','HomeController@register_user')->name('register_user');



Auth::routes();
Route::group(['middleware' => ['auth']], function () { 

	Route::get('/dashboard', function() {
		return view('pages.dashboard');
	});

//Admin
Route::get('/admin/agent/list','adminController@agentList')->name('agentList');
Route::get('/admin/broker/list','adminController@brokerList')->name('brokerList');

//Car Listing
Route::get('/mycars','carController@car_list')->name('car_list');
Route::get('/create', 'carController@car_list_index')->name('car_list_index');
Route::post('/create', 'carController@car_list_create')->name('car_list_create');
Route::get('/car/details/{id}', 'carController@mycarDetails')->name('mycarDetails');

//Car Agent
Route::get('/car/agent','agentController@car_need_agent_index')->name('car_need_agent_index');
Route::get('/car/agent/{id}','agentController@car_need_agent')->name('car_need_agent');

//Market Place
Route::get('/market/cars/sale','marketPlaceController@carsForSale')->name('carsForSale');

//Broker
Route::get('/car/broker/{id}','carController@applyBroker')->name('applyBroker');
Route::get('/broker/wallet/{id}','brokerController@brokerWallet')->name('brokerWallet');
Route::post('/broker/wallet/add/{id}','brokerController@updateWallet')->name('updateWallet');
Route::get('/broker/buy/car/{id}','brokerController@buyCar')->name('buyCar');




});

Route::get('/mygigs', function() {
	return view('pages.mygigs');
});

Route::get('/mycar', function() {
	return view('pages.mycar');
});
Route::get('/car', function() {
	return view('pages.car');
});

Route::get('/ewallet', function() {
	return view('pages.ewallet');
});

Route::get('/bwallet', function() {
	return view('pages.bwallet');
});

Route::get('/ckc', function() {
	return view('pages.ckcwallet');
});

Route::get('/referrals', function() {
	return view('pages.referrals');
});

Route::get('/cars', function() {
	return view('pages.marketcars');
});

Route::get('/gigs', function() {
	return view('pages.marketgigs');
});

Route::get('/news', function() {
	return view('pages.news');
});

Route::get('/profile', function() {
	return view('pages.profile');
});

Route::get('/settings', function() {
	return view('pages.settings');
});

Route::post("/registerCustom" , "TestController@register");