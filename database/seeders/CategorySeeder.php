<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category -> name = "Đời Sống";
        $category->save();

        $category = new Category();
        $category -> name = "Kinh tế";
        $category->save();

        $category = new Category();
        $category -> name = "Tình Yêu";
        $category->save();

        $category = new Category();
        $category -> name = "Lịnh Sử";
        $category->save();

        $category = new Category();
        $category -> name = "Xã Hội";
        $category->save();
    }
}
