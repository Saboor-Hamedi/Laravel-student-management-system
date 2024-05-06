<?php

namespace Database\Factories;

use App\Models\JobList;
use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobListFactory extends Factory
{

    protected $model = JobList::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(4);
        $slug = Str::slug($title, '-');
        return [
            'title' => $title,
            'employee_id' => 1,
            'body_text' => $this->faker->realText(400),
            'slug' =>$slug,
            'salary' => $this->faker->numberBetween(1,1000000),
        ];
    }
}
