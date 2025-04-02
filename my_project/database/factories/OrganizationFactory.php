<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageFiles = Storage::files('public/images/organizations');

        $imagePath = count($imageFiles) ? str_replace('public/', '', $this->faker->randomElement($imageFiles))
        : '/default_organization.jpg';

        return [
            'name' => $this->faker->sentence(4),
            'image' => $imagePath,
            'description' => $this->faker->paragraph(),
            'url' => $this->faker->url(),
            'organization_type' => $this->faker->word(),
            'contact' => $this->faker->name(),
            'email' => $this->faker->email()
        ];
    }
}
