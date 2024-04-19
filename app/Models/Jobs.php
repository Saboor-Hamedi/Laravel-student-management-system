<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Jobs
{
    public static function all(): array
    {
        return [
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
    }
    public static function find(int $id): array
    {
        $job =  Arr::first(static::all(), fn ($job) => $job['id'] == $id);
        if (!$job) {
            abort(404);
        }
        return $job;
    }
}
