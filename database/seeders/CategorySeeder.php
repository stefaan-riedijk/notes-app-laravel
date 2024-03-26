<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public $blogCategories = ['Technology', 'Health', 'Travel', 'Food', 'Fashion', 'Fitness', 'Finance', 'Education', 'Entertainment', 'Sports', 'Business', 'Music', 'Art', 'Science', 'Politics', 'Environment', 'Books', 'Gaming', 'Pets', 'DIY', 'Beauty', 'Cars', 'Home Decor', 'Parenting', 'Photography', 'Relationships', 'History', 'Self-Improvement', 'Spirituality', 'Movies', 'TV Shows', 'Crafts', 'Cooking', 'Gardening', 'Fitness', 'Technology', 'Outdoor', 'Artificial Intelligence', 'Cryptocurrency', 'Personal Finance', 'Productivity', 'Blockchain', 'Sustainability', 'Social Media', 'Video Games', 'Virtual Reality', 'Machine Learning', 'Data Science'];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->blogCategories as $key => $category) {
            Category::create([
                'id' => $key + 1,
                'name' => $category,
            ]);
        }
    }
}
