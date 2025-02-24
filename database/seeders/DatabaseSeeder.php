<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

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

        // Tạo danh mục mẫu
        $category1 = Category::create([
            'name' => 'Điện thoại',
            'description' => 'Các loại điện thoại di động'
        ]);

        $category2 = Category::create([
            'name' => 'Laptop',
            'description' => 'Các loại máy tính xách tay'
        ]);

        // Tạo sản phẩm mẫu
        Product::create([
            'name' => 'iPhone 15',
            'description' => 'iPhone 15 mới nhất từ Apple',
            'price' => 25000000,
            'image' => 'https://example.com/iphone15.jpg',
            'category_id' => $category1->id
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S24',
            'description' => 'Samsung Galaxy S24 với nhiều tính năng mới',
            'price' => 22000000,
            'image' => 'https://example.com/s24.jpg',
            'category_id' => $category1->id
        ]);

        Product::create([
            'name' => 'MacBook Pro M3',
            'description' => 'MacBook Pro với chip M3 mạnh mẽ',
            'price' => 45000000,
            'image' => 'https://example.com/macbook.jpg',
            'category_id' => $category2->id
        ]);
    }
}
