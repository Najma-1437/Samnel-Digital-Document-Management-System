<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
        'description' => $this->faker->paragraph,
        'file_path' => 'documents/' . $this->faker->uuid() . '.pdf',
        'file_type' => 'pdf',
        'status' => $this->faker->randomElement(['draft', 'pending_approval', 'approved']),
        'parent_doc_id' => null,
        // created_by, updated_by passed from seeder
    ];
    }
}
