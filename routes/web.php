<?php

use App\Events\MessagePosted;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/chat', function(){
        return view('chat');
    })->name('chat');


    Route::get('/messages', function(){
        return App\Message::with('user')->get();
    });

    Route::post('/messages', function () {
        
        $user = Auth::user();
        $message = $user->messages()->create([
            'message' => request()->get('message')
        ]);
        
        broadcast(new MessagePosted($message, $user))->toOthers();
        return ['status' => 'OK'];
    });
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
