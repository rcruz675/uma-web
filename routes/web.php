<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//start of routes

//Route::middleware(['auth', 'rolecheck:user'])->group(function () {

    Route::get('/homepage', function () {
        return view('umaWebsiteMain.umaHomepage');
    })->name('homepage');

    Route::get('/characters', function () {
        return view('umaWebsiteMain.umaPullPrioCharacters');
    })->name('pullprio1');

    Route::get('/supportcards', function () {
        return view('umaWebsiteMain.umaPullPrioCards');
    })->name('pullprio2');

    Route::get('/charactersinfo', function () {
        return view('umaWebsiteMain.umaInfoCharacters');
    })->name('info1');

    Route::get('/supportcardsinfo', function () {
        return view('umaWebsiteMain.umaInfoSupportCards');
    })->name('info2');

    Route::get('/championsmeetings', function () {
        return view('umaWebsiteMain.umaChanMe');
    })->name('chanme');

    Route::get('/teamtrials', function () {
        return view('umaWebsiteMain.umaTeamTrials');
    })->name('tt');


//});



