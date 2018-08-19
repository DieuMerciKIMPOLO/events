<?php

// use Illuminate\Support\Facades\Event;

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
use App\Event;
Route::get('/', function () {
    // Event::create(
    //     [
    //       'name'=>'Toto',
    //       'description'=>'Toto des',
    //       'location'=>'Nkayi',
    //       'price'=>0,
    //       'start_at'=> new DateTime('-10 hours')
    //     ]);
    //     Event::create(
    //         [
    //           'name'=>'Toto1',
    //           'description'=>'Toto1 des',
    //           'location'=>'Nkayi',
    //           'price'=>0,
    //           'start_at'=> new DateTime('+10 hours')
    //         ]);
    //         Event::create(
    //             [
    //               'name'=>'Toto2',
    //               'description'=>'Toto2 des',
    //               'location'=>'Nkayi',
    //               'price'=>0,
    //               'start_at'=> new DateTime('+4 hours')
    //             ]);
    $events= Event::all();
    return view('events.index')->withEvents($events);
});
