<?php

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/team', function () {
    return view('pages.team');
})->name('team');

Route::get('/career', function () {
    return view('pages.career');
})->name('career');

Route::get('/career/apply', function () {
    return view('pages.apply');
})->name('apply');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


