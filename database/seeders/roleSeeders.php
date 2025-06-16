<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class roleSeeders extends Seeder
{
    public function run(): void
    {
        Role::factory()->create(['role_name' => 'Admin', 'description' => 'Administrator with full access']);
        Role::factory()->create(['role_name' => 'Contributor', 'description' => 'Can write and edit own posts']);
        Role::factory()->create(['role_name' => 'Subscriber', 'description' => 'Can read and comment on posts']);
    }
}