<?php

namespace Database\Factories;

use Facade\Ignition\Support\FakeComposer;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'task_name' => $this->faker->sentence(3),
        ];
    }
}
