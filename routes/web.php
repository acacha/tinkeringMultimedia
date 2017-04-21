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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    Route::get('tinkeringVideoJs', function ()    {
        $data = [];
        return view('tinkeringVideoJs',$data);
    })->name('tinkeringVideoJs');

    Route::get('tinkeringVideo', function ()    {
        $data = [];
        return view('tinkeringVideo',$data);
    })->name('tinkeringVideo');

    Route::get('d3demo1', 'D3demo1Controller@index')->name('d3demo1');

    Route::get('d3demo', 'D3demoController@index')->name('d3demo');

});
