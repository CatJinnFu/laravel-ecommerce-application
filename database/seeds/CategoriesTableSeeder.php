<?php

use App\Models\Category;
use Illuminate\Database\Seeder;


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
            'name'          =>  'Root',
            'description'   =>  'This is the root category, don\'t delete this one',
            'parent_id'     =>  null,
            'menu'          =>  0,
        ]);

        //factory('App\Models\Category', 10)->create();

        Category::create([
            'name'          =>  'Catergory 1',
            'description'   =>  'This is test 1',
            'parent_id'     =>  1,
            'menu'          =>  1,
        ]);

        Category::create([
            'name'          =>  'Catergory 2',
            'description'   =>  'This is test 2',
            'parent_id'     =>  1,
            'menu'          =>  1,
        ]);

        Category::create([
            'name'          =>  'Catergory 3',
            'description'   =>  'This is test 3',
            'parent_id'     =>  1,
            'menu'          =>  1,
        ]);

        Category::create([
            'name'          =>  'Catergory 4',
            'description'   =>  'This is test 4',
            'parent_id'     =>  1,
            'menu'          =>  1,
        ]);
    }
}
