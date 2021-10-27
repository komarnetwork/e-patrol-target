<?php

namespace Database\Factories;

use App\Models\Absen;
use Illuminate\Database\Eloquent\Factories\Factory;

class AbsenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Absen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 3),
            'name' => $this->faker->name(),
            'datang' => $this->faker->dateTime()
        ];
    }
}
