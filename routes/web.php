<?php
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*----------------------------*/
//      REGISTER
Route::get('/bregister',array(
    'as'=> 'bregister',
    'uses' =>'BRegisterController@showReg'
    ));

Route::post('/bregister-submit',array(
    'as'=> 'bregister-submit',
    'uses' =>'BRegisterController@createReg'
    ));

/*----------------------------*/
//      LOGIN
/*----------------------------*/
Route::get('/blogin',array(
    'as'=> 'blogin',
    'uses' =>'BLoginController@showLogin'
    ));

Route::post('/blogin',array(
    'as'=> 'blogin',
    'uses' =>'BLoginController@doLogin'
    ));

/*----------------------------*/
//      LOGOUT
/*----------------------------*/
Route::get('/blogout',array(
    'as'=> 'blogout',
    'uses' =>'BLoginController@doLogout'
    ));

Route::POST('/blogout',array(
    'as'=> 'blogout',
    'uses' =>'BLoginController@doLogout'
    ));


/*----------------------------*/
//      Reset Password
/*----------------------------*/
Route::match(['get', 'post'],'/resetpwd',array(
    'as'=> 'resetpw',
    'uses' =>'HomeController@index'
    ));


/*----------------------------*/
//      Black List Function
/*----------------------------*/
Route::match(['get', 'post'],'/custblacklist',array(
    'as'=> 'cust.blacklist',
    'uses' =>'Blacklist\CustBlacklistController@show'
    ));


Route::group(['middleware' => 'admin'], function(){
/*----------------------------*/
//      Admin Function
/*----------------------------*/
//Route::match(['get', 'post'], '/cust/blacklist', array(
//    'as'=> 'cust.blacklist',
//    'uses' =>'Admin\AdminController@showBlackList'
//    ));

Route::match(['get', 'post'], '/custblacklist/add',array(
    'as'=> 'cust.blacklist.add.show',
    'uses' =>'Admin\AdminController@showCustBlacklistForm'
    ));

Route::match(['get', 'post'], '/custblacklist/add/act', array(
    'as'=> 'cust.blacklist.add.show.act',
    'uses' =>'Admin\AdminController@addCustBlacklistForm'
    ));


});

Route::group(['middleware' => 'auth'], function(){
/*----------------------------*/
//      Normal User Function
/*----------------------------*/
Route::match(['get', 'post'], '/user/dashboard', array(
    'as'=> 'user.dashboard',
    'uses' =>'userController@showDashboard'
    ));

});