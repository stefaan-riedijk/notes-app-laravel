<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public $blogCategories = ['Technology', 'Health', 'Travel', 'Food', 'Fashion', 'Fitness', 'Finance', 'Education', 'Entertainment', 'Sports', 'Business', 'Music', 'Art', 'Science', 'Politics', 'Environment', 'Books', 'Gaming', 'Pets', 'DIY'];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->blogCategories as $key=>$category) {
            Category::create([
                'id' => $key + 1,
                'name' => $category,
            ]);
        }
    }
}
