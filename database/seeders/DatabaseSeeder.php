<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductCategory;
use App\Models\User;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        'Обувь', 'Одежда', 'Аксессуары'
        $categories = [
            ['title' => 'Обувь',
                'children' => ['Кроссовки', 'Ботинки', 'Сандалии']
            ],
            ['title' => 'Одежда',
                'children' => ['Куртки', 'Джинсы', 'Футболки']
            ],
            ['title' => 'Аксессуары',
                'children' => ['Сумки', 'Часы', 'Кошельки']
            ],
        ];
        foreach ($categories as $item){
            $category = Category::create(['title' => $item['title'], 'slug' => \Str::slug($item['title'])]);
            foreach ($item['children'] as $child){
//                dd($child, $category->title);
                $category->children()->create(['title' => $child, 'slug' => \Str::slug($child)]);
            }
        }
//        Category::factory(10)->hasChildren(2)->hasParent(2)->create();
        Brand::factory(10)->create();
    }
}
