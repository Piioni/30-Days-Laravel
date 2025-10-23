<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jobs = Job::all();
    dd($jobs);


//    return view('home');
});

Route::get('jobs', function() {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/about', function () {
		return view('about');
});

Route::get('/contact', function () {
	return view('contact');
});