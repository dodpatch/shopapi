<?php

use Illuminate\Database\Seeder;
use App\Categories;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' =>'tecno',
            'price' => 100000,
            'description' => 'estt un smartphone',
            'color' => 'violet',
        ]);
    }
}
