<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'no' => date('Ymdhis'),
            'cover' => $this->faker->randomElement(
                ["https://loremflickr.com/640/480/cat","https://loremflickr.com/640/480/dog"]),
            'category' => $this->faker->randomElement([1,2]),
            'color' => $this->faker->randomElement([1,2,3,4,5,6,99]),
            'body_type' => $this->faker->randomElement([1,2,3,4]),
            'breed' => $this->faker->randomElement([1,2]),
            'gender' => $this->faker->randomElement([1,2]),
            'age' => $this->faker->randomElement([1,2,3]),
            'is_cut_ear' => $this->faker->boolean,
            'current_location' => $this->faker->city,
            'story' => $this->faker->realText($mxNbChars=20, $indexSize = 1),
            'found_location' => $this->faker->streetAddress,
            'found_date' => $this->faker->dateTimeBetween(
                $startDate = '-1 years', $endDate = 'now', $timezone = null)
        ];
    }
}
