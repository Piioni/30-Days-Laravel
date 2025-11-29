<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('jobs', function () {
    // 'with' se encarga del eagerLoading para evitar el problema N+1
    $jobs = Job::with('employer')->latest()->paginate(5);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('jobs/create', function () {
    return view('jobs.create');
});

// Ruta para ver los detalles de un trabajo específico utilizando una 'wildcard
Route::get('jobs/{Id}', function ($Id) {
    return view('jobs.show', [
        'job' => Job::find($Id)
    ]);
});

Route::post('jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => 'required',
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employerId' => '1',

    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
