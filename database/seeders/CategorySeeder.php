<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Điện tử',
                'description' => 'Danh mục sản phẩm điện tử',
                'image' => null,
                'parent_id' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Quần áo',
                'description' => 'Danh mục sản phẩm quần áo, thời trang',
                'image' => null,
                'parent_id' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Thực phẩm',
                'description' => 'Danh mục sản phẩm thực phẩm, đồ ăn',
                'image' => null,
                'parent_id' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Điện thoại',
                'description' => 'Danh mục điện thoại di động',
                'image' => null,
                'parent_id' => 1,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Laptop',
                'description' => 'Danh mục máy tính xách tay',
                'image' => null,
                'parent_id' => 1,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Áo sơ mi',
                'description' => 'Danh mục áo sơ mi nam nữ',
                'image' => null,
                'parent_id' => 2,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Quần jean',
                'description' => 'Danh mục quần jean',
                'image' => null,
                'parent_id' => 2,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Trái cây',
                'description' => 'Danh mục trái cây tươi',
                'image' => null,
                'parent_id' => 3,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Rau xanh',
                'description' => 'Danh mục rau xanh tươi',
                'image' => null,
                'parent_id' => 3,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Đồ uống',
                'description' => 'Danh mục đồ uống, nước',
                'image' => null,
                'parent_id' => 3,
                'is_active' => 1,
                'is_delete' => 0,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
