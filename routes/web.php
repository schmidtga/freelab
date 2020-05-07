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

//Route::get('/', 'SiteController@index')->name('site.home');
//Route::get('/projeto', 'SiteController@project')->name('site.project');

Route::get('/{any}', function(){
    return view('vueapp');
})->where('any', '.*');

Route::group(
    [
        'prefix'     => 'admin',
        'middleware' => ['auth'],
        'namespace'  => '\App\Http\Controllers\Admin',
    ], function () {
        
        Route::get('home', 'HomeController@index')->name('app.home');

    }
);

Auth::routes();
