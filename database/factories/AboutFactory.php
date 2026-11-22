<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<About>
 */
class AboutFactory extends Factory
{
    protected $model = About::class;

    public function definition(): array
    {
        return [
            'tahun' => (string) fake()->numberBetween(2013, 2026),
            'judul' => fake()->sentence(3),
            'deskripsi' => fake()->paragraph(),
            'nama' => fake()->name(),
            'usia' => fake()->numberBetween(18, 70),
            'nim' => fake()->numerify('##########'),
            'jurusan' => fake()->word(),
        ];
    }
}
