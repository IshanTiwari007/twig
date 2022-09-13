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
    $loader = new \Twig\Loader\FilesystemLoader('C:\Users\Ishan\OneDrive - EV Software Solutions Pvt Ltd\Documents\Projects\Project1\resources\views/');
    $twig = new \Twig\Environment($loader, [
    'cache' => 'C:\Users\Ishan\OneDrive - EV Software Solutions Pvt Ltd\Documents\Projects\Project1\public\cache',
    'auto_reload'=>true,
        ]);

    echo $twig->render('ishan.twig');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
