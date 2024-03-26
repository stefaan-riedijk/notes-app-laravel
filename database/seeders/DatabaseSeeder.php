<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(5)->has(Post::factory()->count(3))->create();
        User::create([
            'name' => 'Stefaan Riedijk',
            'email' => 'stefaanriedijk@gmail.com',
            'password' => Hash::make('gekkecrazy'),
        ]);
        $this->call([
            CategorySeeder::class,
        ]);
    }
    }
