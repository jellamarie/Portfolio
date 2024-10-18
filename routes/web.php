<?php

use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('home');
});

// Route for the "homework" lab activity
Route::get('/homework', function () {
    return view('homework');
});

// Route for the "routes" lab activity
Route::get('/routes', function () {
    return view('routes');
});

// Route for the "layout" lab activity
Route::get('/layout', function () {
    return view('layout');
});

// Route for the "middleware" lab activity
Route::get('/middleware', function () {
    return view('middleware');
});

// Parameterized route example
Route::get('/lab/{id}', function ($id) {
    return view('lab', ['id' => $id]);
});

