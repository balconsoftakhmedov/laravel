<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
Route::get( '/', function () {
    return view( 'welcome' );
} );
Route::get( '/products', function () {
    return '/products';
} )->middleware('checkinput');
Route::get( '/product/{id}/{comment}', function ( $id, $comment ) {
    return [ $id, $comment ];
} );
Route::prefix( 'admin')->group(function (){
    Route::match( ['get', 'post'], '/auth', function () {
    return 'auth.index';
    })->middleware('throttle:test');
    Route::match( ['get', 'post'], '/products', function () {

    return 'products';
    });
    Route::match( ['get', 'post'], '/clients', function () {

    return 'clients';
    });
} );

Route::get( '/secretpage', function () {
    return '/secretpage';
} );

Route::get( '/mypage', [MainController::class, 'test']);
Route::get( '/mypageblade', [MainController::class, 'testblade']);
Route::get( '/testview', [MainController::class, 'testview']);
Route::get( '/mypageblade/contacts', [MainController::class, 'contacts']);

