<?php

namespace Database\Factories;
use App\Models\Document;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApprovalsWorkflow>
 */
class ApprovalsWorkflowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'status' => $this->faker->randomElement(['pending', 'approved', 'rejected', 'returned_for_revision']),
        'comments' => $this->faker->optional()->paragraph(),
        'requested_at' => now(),
        'responded_at' => null,
        'sequence_order' => $this->faker->numberBetween(1, 5),
        ];
    }
}
