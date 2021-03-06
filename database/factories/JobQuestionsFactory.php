<?php

namespace Database\Factories;

use App\Models\JobQuestions;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobQuestionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobQuestions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'uuid'=>$this->faker->uuid,
            'questions'=> $this->faker->text,
            'job_id'=>rand(1,1000),
        ];
    }
}
