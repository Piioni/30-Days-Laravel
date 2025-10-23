<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('jobs/{Id}', function ($Id) {
    return view('job', [
        'job' => Job::find($Id)
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
