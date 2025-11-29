<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('jobs', function () {
    // 'with' se encarga del eagerLoading para evitar el problema N+1
    $jobs = Job::with('employer')->paginate(5);

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

// Ruta para ver los detalles de un trabajo específico utilizando una 'wildcard
Route::get('jobs/{Id}', function ($Id) {
    return view('job', [
        'job' => Job::find($Id)
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
