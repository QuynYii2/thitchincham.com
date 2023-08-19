<?php

namespace Database\Seeders;

use App\Enums\CategoryStatus;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Món tráng miệng',
                'thumbnail' => 'https://suckhoedoisong.qltns.mediacdn.vn/Images/phamhiep/2016/08/09/1_11.jpg',
                'status' => CategoryStatus::ACTIVE,
                'user_id' => 1,
            ],
            [
                'name' => 'Lẩu & Nướng',
                'thumbnail' => 'https://kvi.vn/Uploads/786/images/khoa%20hoc%20lau%20thai%20kinh%20doanh.jpg',
                'status' => CategoryStatus::ACTIVE,
                'user_id' => 1,
            ],
            [
                'name' => 'Best seller',
                'thumbnail' => 'https://img.freepik.com/premium-psd/best-seller-food-social-media-poster-template_69464-2624.jpg',
                'status' => CategoryStatus::ACTIVE,
                'user_id' => 1,
            ],
            [
                'name' => 'Các món Gà & Vịt',
                'thumbnail' => 'https://heoquaymamyfood.vn/image/cache/catalog/z2494449806274_ee6add7b9e0812292cecbeaf63a7cbe7-400x400.jpg',
                'status' => CategoryStatus::ACTIVE,
                'user_id' => 1,
            ],
            [
                'name' => 'Các món Ếch',
                'thumbnail' => 'https://intertour.vn/wp-content/uploads/2022/03/be4ef8b8-a349-4e34-921b-55e58957f4d5.jpg',
                'status' => CategoryStatus::ACTIVE,
                'user_id' => 1,
            ],
            [
                'name' => 'Các món Hải sản',
                'thumbnail' => 'https://haisanquangphong.com/upload/product/7-mon-an-ngon-mong-cai-1.jpg',
                'status' => CategoryStatus::ACTIVE,
                'user_id' => 1,
            ],
        ];

        Category::insert($categories);
    }
}
