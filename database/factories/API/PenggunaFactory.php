<?php

namespace Database\Factories\API;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\API\Pengguna>
 */
class PenggunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'username' => $this->faker->name,
            'password' => $this->faker->text,
            'nilai' => $this->faker->numberBetween(1, 200),
            'pohon_waris' => $this->faker->numberBetween(1, 200),
        ];
    }
}
