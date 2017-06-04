<?php

use App\Category;
use App\Group;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $categories = ['Fruits & Vegetables', 'Grocery & Staples', 'Personal Care'];

       $category2 = $categories[1];
       $category3 = $categories[2];


       $group1 = ['Fresh Vegetables', 'Fresh Fruits'];
       $group2 = ['Dry Fruits', 'Rice & Rice Products'];
       $group3 = ['Baby Care', 'Cosmetics'];

       foreach ($categories as $category) 
       {
          factory(App\Category::class)->create([
               'name' => $category 
            ]);
       }

       $category1 = Category::whereName('Fruits & Vegetables')->first();
       $category2 = Category::whereName('Grocery & Staples')->first();
       $category3 = Category::whereName('Personal Care')->first();


       foreach ($group1 as $group) 
       {
           factory(App\Group::class)->create([
               'name' => $group,
               'category_id' => $category1->id,
            ]);
       }

       foreach ($group2 as $group) 
       {
           factory(App\Group::class)->create([
               'name' => $group,
               'category_id' => $category2->id,
            ]);
       }

       foreach ($group3 as $group) 
       {
           factory(App\Group::class)->create([
               'name' => $group,
               'category_id' => $category3->id,
            ]);
       }

       $groups = Group::all();

       foreach ($groups as $group) 
       {
            factory(App\Product::class, random_int(2, 5))->create([
                 'group_id' => $group->id  
                ]);
       }


    }
}
