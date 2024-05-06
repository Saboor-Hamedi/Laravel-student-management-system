<?php

namespace Database\Seeders;

use App\Models\JobList;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Tag;

class JobListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // JobList::factory()->count(20)->create();
            JobList::factory(10)->create()->each(function ($jobList) {
            // Get random tag IDs (e.g., 2 to 4 tags per jobList)
            $tagIds = Tag::inRandomOrder()->limit(rand(1, 3))->pluck('id')->toArray();
            // Attach tags to the current jobList
            $jobList->tags()->attach($tagIds);
        });

    }
}
