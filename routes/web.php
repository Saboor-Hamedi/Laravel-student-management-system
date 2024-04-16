<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('/about');
});
Route::get('/jobs', function () {
    return view('/jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Web Developer',
                'salary' => 10000
            ],
            [
                'id' => 2,
                'title' => 'Web Designer',
                'salary' => 5000
            ],
            [
                'id' => 3,
                'title' => 'Graphic Designer',
                'salary' => 7000
            ]
        ]
    ]);
});
Route::get('/job-list/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Web Developer',
            'salary' => 10000
        ],
        [
            'id' => 2,
            'title' => 'Web Designer',
            'salary' => 5000
        ],
        [
            'id' => 3,
            'title' => 'Graphic Designer',
            'salary' => 7000
        ]
    ];
    $job =  Arr::first($jobs, fn ($job) => $job['id'] == $id);
    // foreach ($jobs as $job) {
    //     if ($job['id'] == $id) {
    //         return view('job-list', ['job' => $job]);
    //     }
    // }
    return view('job-list', ['job' => $job]);
});
