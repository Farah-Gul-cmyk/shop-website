<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        
        User::factory()->create([
            'name' => 'Farah Gull',
            'email' => 'fariikhn.03@gmail.com',
            'password' => bcrypt('password')
        ]);

        
        $categories = [
            ['name' => 'Watches', 'slug' => 'watches', 'image' => 'category_img_01.jpg'],
            ['name' => 'Shoes', 'slug' => 'shoes', 'image' => 'category_img_02.jpg'],
            ['name' => 'Accessories', 'slug' => 'accessories', 'image' => 'category_img_03.jpg'],
        ];

        foreach ($categories as $catData) {
            $category = Category::create([
                'name' => $catData['name'],
                'slug' => $catData['slug'],
            ]);

            
            $category->file()->create([
                'path' => $catData['image']
            ]);
        }

        
        $products = [
            [
                'category_id' => 1,
                'name' => 'Classic Leather Watch',
                'slug' => 'classic-leather-watch',
                'price' => 250.00,
                'description' => 'A elegant classic leather watch for men and women.',
                'image' => 'product_single_01.jpg'
            ],
            [
                'category_id' => 2,
                'name' => 'Casual Sport Shoes',
                'slug' => 'casual-sport-shoes',
                'price' => 120.00,
                'description' => 'Comfortable sport shoes for daily running and casual wear.',
                'image' => 'product_single_02.jpg'
            ],
        ];

        foreach ($products as $prodData) {
            $imageName = $prodData['image'];
            unset($prodData['image']); 
            $product = Product::create($prodData);

            
            $product->file()->create([
                'path' => $imageName
            ]);
        }
    }
}