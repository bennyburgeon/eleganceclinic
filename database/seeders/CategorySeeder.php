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
        Category::create([
            'name' => 'FACE TREATMENTS',
        ]);
        Category::create([
            'name' => 'EYE TREATMENTS',
        ]);
        Category::create([
            'name' => 'HANDS & FEET TREATMENTS',
        ]);
        Category::create([
            'name' => 'BODY TREATMENTS',
        ]);
        Category::create([
            'name' => 'HAIR CUT & COLOUR TREATMENTS',
        ]);
    }
}
