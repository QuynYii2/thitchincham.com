<?php

namespace Database\Seeders;

use App\Enums\MenuStatus;
use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Cơm rang',
                'user_id' => 1,
                'thumbnail' => 'https://giavi.net/wp-content/uploads/2022/07/com-rang-thap-cam-3.jpg',
                'price' => 10,
                'description' => 'This is the description of Rose',
                'status' => MenuStatus::ACTIVE,
                'old_price' => 12,
                'category_id' => 1,
                'short_description' => 'This is the description of Rose',
            ],
            [
                'name' => 'Gà rang muối',
                'user_id' => 1,
                'thumbnail' => 'https://cdn.statically.io/img/gachaybo.com/f=auto/wp-content/uploads/2021/04/thit-ga-rang-muoi-1.jpg',
                'price' => 10,
                'description' => 'This is the description of Dahlia',
                'status' => MenuStatus::ACTIVE,
                'old_price' => 12,
                'category_id' => 1,
                'short_description' => 'This is the description of Dahlia',
            ],
            [
                'name' => 'Kem',
                'user_id' => 1,
                'thumbnail' => 'https://img.meta.com.vn/Data/image/2020/06/06/cach-lam-kem-socola-al.jpg',
                'price' => 10,
                'description' => 'This is the description of Carnation',
                'status' => MenuStatus::ACTIVE,
                'old_price' => 12,
                'category_id' => 3,
                'short_description' => 'This is the description of Carnation',
            ],
            [
                'name' => 'Ếch xào măng cay',
                'user_id' => 1,
                'thumbnail' => 'https://ameovat.com/wp-content/uploads/2018/09/cach-lam-ech-xao-mang-01.jpg',
                'price' => 12,
                'description' => 'This is the description of Hydrangea',
                'status' => MenuStatus::ACTIVE,
                'old_price' => 15,
                'category_id' => 2,
                'short_description' => 'This is the description of Hydrangea',
            ],
            [
                'name' => 'Bò nướng tảng',
                'user_id' => 1,
                'thumbnail' => 'https://botoquanmoc.com/images/products/2023/06/26/original/354232267_627857959293394_483675457789593358_n_1687748472.jpg',
                'price' => 15,
                'description' => 'This is the description of Sunflower',
                'status' => MenuStatus::ACTIVE,
                'old_price' => 18,
                'category_id' => 6,
                'short_description' => 'This is the description of Sunflower',
            ],
            [
                'name' => 'Lẩu gà thuốc bắc',
                'user_id' => 1,
                'thumbnail' => 'https://i.ytimg.com/vi/nnMkpuMQcx0/maxresdefault.jpg',
                'price' => 8,
                'description' => 'This is the description of Lily',
                'status' => MenuStatus::ACTIVE,
                'old_price' => 12,
                'category_id' => 4,
                'short_description' => 'This is the description of Lily',
            ],
            [
                'name' => 'Hàu nướng mỡ hành',
                'user_id' => 1,
                'thumbnail' => 'https://toplist.vn/images/800px/hau-nuong-mo-hanh-748922.jpg',
                'price' => 10,
                'description' => 'This is the description of Lotus',
                'status' => MenuStatus::ACTIVE,
                'old_price' => 10,
                'category_id' => 1,
                'short_description' => 'This is the description of Lotus',
            ],
            [
                'name' => 'Tôm chiên',
                'user_id' => 1,
                'thumbnail' => 'https://chefdzung.com.vn/uploads/images/ngoc-linh/1906848-orig.jpg',
                'price' => 11,
                'description' => 'This is the description of Flamboyant',
                'status' => MenuStatus::ACTIVE,
                'old_price' => 12,
                'category_id' => 1,
                'short_description' => 'This is the description of Flamboyant',
            ],
            [
                'name' => 'Gà rán',
                'user_id' => 1,
                'thumbnail' => 'https://cdn.tgdd.vn/Files/2017/03/22/963765/cach-lam-ga-ran-thom-ngon-8_760x450.jpg',
                'price' => 10,
                'description' => 'This is the description of Dandelion',
                'status' => MenuStatus::ACTIVE,
                'old_price' => 15,
                'category_id' => 3,
                'short_description' => 'This is the description of Dandelion',
            ],
            [
                'name' => 'Vịt quay',
                'user_id' => 1,
                'thumbnail' => 'https://nguonsongxanh.net.vn/wp-content/uploads/2023/01/vit-quay-nu-ky-1.png',
                'price' => 10,
                'description' => 'This is the description of Fragipane',
                'status' => MenuStatus::ACTIVE,
                'old_price' => 18,
                'category_id' => 5,
                'short_description' => 'This is the description of Fragipane',
            ],
        ];

        Menu::insert($products);
    }
}
