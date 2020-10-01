<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'name' =>'tecno',
            'price' => 100000,
            'description' => 'estt un smartphone',
            'color' => 'violet',
        ]);
    }
}
