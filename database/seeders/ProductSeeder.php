<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Nike Mercurial Superfly 9 Elite',
                'description' => 'The most explosive football boot for elite players. Features a lightweight Flyknit upper and Zoom Air for maximum speed and control.',
                'price' => 299.99,
                'image' => '/images/products/merc.jpg',
                'category' => 'Boots',
            ],
            [
                'name' => 'Adidas Predator Edge.3',
                'description' => 'Control the game with precision. HybridTouch upper with Zone Skin for enhanced grip and ball control.',
                'price' => 249.99,
                'image' => '/images/products/pred.jpg',
                'category' => 'Boots',
            ],
            [
                'name' => 'Puma Ultra Ultimate',
                'description' => 'Speed and agility in one boot. PWRRUN foam for energy return and lightweight construction.',
                'price' => 199.99,
                'image' => '/images/products/puma.jpg',
                'category' => 'Boots',
            ],
            [
                'name' => 'Barcelona Home Jersey 2024',
                'description' => 'Official Barcelona home jersey featuring the iconic stripes. Made with breathable fabric for optimal performance.',
                'price' => 89.99,
                'image' => '/images/products/barca.jpg',
                'category' => 'Jerseys',
            ],
            [
                'name' => 'Real Madrid Away Jersey 2024',
                'description' => 'Classic white away jersey of Real Madrid. Premium quality with embroidered crest and sponsor logos.',
                'price' => 89.99,
                'image' => '/images/products/realm.jpg',
                'category' => 'Jerseys',
            ],
            [
                'name' => 'Manchester City Training Kit',
                'description' => 'Complete training set with jersey, shorts, and socks. Moisture-wicking fabric for intense sessions.',
                'price' => 129.99,
                'image' => '/images/products/city.jpg',
                'category' => 'Training',
            ],
            [
                'name' => 'Adidas Tango Football',
                'description' => 'Official match ball with premium grip and flight characteristics. Used in major tournaments worldwide.',
                'price' => 49.99,
                'image' => '/images/products/ball.jpg',
                'category' => 'Balls',
            ],
            [
                'name' => 'Nike Goalkeeper Gloves',
                'description' => 'Professional goalkeeper gloves with latex palm and wrist support. Maximum grip and protection.',
                'price' => 79.99,
                'image' => '/images/products/gloves.jpg',
                'category' => 'Accessories',
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['name' => $product['name']],
                $product
            );
        }
    }
}
