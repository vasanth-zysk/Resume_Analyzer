<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Call other seeders
        $this->call([
            PossibleSkillsSeeder::class,
            SkillAliasesSeeder::class,
            // Add your other seeder classes here, for example:
            // RoleSeeder::class,
            // PermissionSeeder::class,
            // CategorySeeder::class,
        ]);
    }
}
