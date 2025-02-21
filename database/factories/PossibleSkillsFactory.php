<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PossibleSkills>
 */
class PossibleSkillsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Programming Languages',
            'Frameworks',
            'Databases',
            'DevOps',
            'Cloud',
            'Frontend',
            'Testing',
            'Mobile',
            'AI/ML',
            'Tools',
            'Backend',
            'System Design',
            'Security',
            'Data Science',
            'Project Management',
            'Version Control',
            'Game Development',
            'Blockchain'
        ];

        return [
            'name' => $this->faker->unique()->word(),
            'category' => $this->faker->randomElement($categories),
        ];
    }
}
