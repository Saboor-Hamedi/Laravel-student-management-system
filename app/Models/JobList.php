<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class JobList extends Model
{
    use HasFactory;
    protected $table = 'joblists';
    protected $fillable =[
        'title',
        'employee_id',
        'body_text',
        'salary',
        'slug',
        'alary',
        'name'
    ];
    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
    // , 'job_tag', 'job_id', 'tag_id'
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($jobList) {
            $jobList->slug = str::slug($jobList->title); // Example using title
        });
    }




}
