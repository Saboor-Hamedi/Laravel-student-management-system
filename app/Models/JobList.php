<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobList extends Model
{
    use HasFactory;
    protected $table = 'joblists';
    protected $fillable =[
        'title',
        'slug',
        'salary'
    ];
}