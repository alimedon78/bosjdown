<?php

use Illuminate\Support\Facades\Route;

use App\Models\Message;
use App\Models\Subscriber;
use App\Models\Event;
use App\Models\Stream;
use App\Models\User;

use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\EventController;
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

Route::get('/adminauthbackend', function () {
    return view('auth.login');
});
 
Route::get('/watch', function () {
    return view('watch', [
        'watch' => Stream::find(1)
    ]);
});
Route::get('/high-courts', function () {
    return view('high-courts');
});
Route::get('/sharia-court-of-appeal', function () {
    return view('sharia-court');
});
Route::get('/magistrate-courts', function () {
    return view('magistrate-courts');
});
Route::get('/sharia-courts', function () {
    return view('area-courts');
});
Route::get('/upper-sharia-courts', function () {
    return view('upper-area-courts');
});
Route::get('/litigation', function () {
    return view('litigation');
});
Route::get('/appeal-registry', function () {
    return view('state-appeal');
});
Route::get('/probate-registry', function () {
    return view('probate-registry');
});
Route::get('/oadr', function () {
    return view('oadr');
});
Route::get('/adr', function () {
    return view('adr');
});
Route::get('/translation', function () {
    return view('translation');
});
Route::get('/ict', function () {
    return view('ict');
});
Route::get('/jsc', function () {
    return view('jsc');
});
Route::get('/jrc', function () {
    return view('jrc');
});
Route::get('/cause-list', function () {
    return view('cause-list');
});
Route::get('/ncms-efiling', function () {
    return view('ncms');
});
 
Route::get('/news-and-events/{slug}', [EventController::class, 'shownews'])->name('show-news');
Route::get('/news-and-events', [EventController::class, 'searchnews'])->name('search-news');
Route::get('/', [EventController::class, 'index'])->name('home');
Route::get('/index.html', [EventController::class, 'index'])->name('index');


Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/downloads', function () {
    return view('downloads');
}); 


Route::post('/subscribe', [SubscribeController::class, 'subscribe']);
Route::post('/sendmessage', [SubscribeController::class, 'store']);


Route::middleware('auth')->group(function () {
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/newsevents', function () {
    return view('backend.newsevents', [
        'events'=>Event::orderBy('updated_at', 'DESC')->get()
    ]);
})->name('newsevents');

Route::get('/messages', function () {
    return view('backend.messages', [
        'messages'=> Message::orderBy('updated_at', 'DESC')->get()
    ]);
})->name('messages');

Route::get('/watchevents',[EventController::class, 'load'])->name('watchevents');
 

Route::get('/message/file/{id}', [MessageController::class, 'download'])->name('upload.download');
Route::get('/message/file/{file}', [MessageController::class, 'downloadfile'])->name('file.download');
Route::get('/post-news', [EventController::class, 'show'])->name('post-news');
Route::get('/edit-news/{event}/edit', [EventController::class, 'edit'])->name('edit-news');
Route::patch('/edit-news/{event}', [EventController::class, 'update'])->name('update-news');
Route::delete('/edit-news/{event}', [EventController::class, 'destroy'])->name('destroy-news');
Route::post('/create-news', [EventController::class, 'store'])->name('create-news');
Route::post('/post-watchevent', [EventController::class, 'updateStream'])->name('post-watch');

});
require __DIR__.'/auth.php';
