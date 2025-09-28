<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nip' =>fake()->unique()->numerify('2023#####'),
            'nama' => fake()->name(),
            'kelamin'=>fake()->randomElement(['L','P']),
            'alamat'=>fake()->address(),
        ];
    }
}
