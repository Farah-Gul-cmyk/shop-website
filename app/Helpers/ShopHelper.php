<?php

namespace App\Helpers;

use App\Models\Product;
use App\Models\Category;

class ShopHelper {
    public static function getHomeData() {
        $categories = Category::with('files')->get();
        $products = Product::with('files')->take(3)->get();

        if ($products->count() < 3) {
            $dummyProduct = new Product([
                'name' => 'Polaroid Camera',
                'price' => '360.00',
                'description' => 'Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et scelerisque ipsum lobortis nec.'
            ]);
            $products->push($dummyProduct);
        }

        $products->each(function ($product, $index) {
            $defaultImgs = ['feature_prod_01.jpg', 'feature_prod_02.jpg', 'feature_prod_03.jpg'];
            
            if (!$product->relationLoaded('files') || $product->files->isEmpty()) {
                $selectedImg = $defaultImgs[$index % 3];
                $product->image_url = asset('assets/img/' . $selectedImg);
            } else {
                $product->image_url = asset('storage/' . $product->files->first()->path);
            }
        });

        return [
            'categories' => $categories,
            'products' => $products
        ];
    }
}