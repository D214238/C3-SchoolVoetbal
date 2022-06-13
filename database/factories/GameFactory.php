<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Game;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Game::class;

    public function definition()
    {
        return [
            'team1_id' => 0,
            'team2_id' => 0,
            'field_id' => $this->faker->numberBetween(1, 6),
            'team1_score' => $this->faker->randomDigit(),
            'team2_score' => $this->faker->randomDigit(),
            'tournament_id' => 0,
            'start_time' => $this->faker->time()
        ];
    }

}
