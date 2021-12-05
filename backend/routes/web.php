<?php

use App\Models\Event;
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

    // return view('welcome');
    $events = Event::all();

    return view('events', [
        'events' => $events
    ]);
});

Route::get('/events/{event}', function ($id) {
    $event = Event::findOrFail($id);

    return view('event', [
        'events' => $event
    ]);
});
