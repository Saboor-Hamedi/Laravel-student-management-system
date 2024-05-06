<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tags';

    protected $fillable = ['name'];
    // , 'job_tag', 'tag_id', 'job_id'
    public function jobLists()
    {
        return $this->belongsToMany(JobList::class);
    }



}
