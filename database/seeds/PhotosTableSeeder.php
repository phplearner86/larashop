<?php

use App\Product;
use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $photos1 = ['images/products/1.png', 'images/products/2.png', 'images/products/3.png'];

        foreach ($photos1 as $photo) {
           factory(App\Photo::class)->create([
                'path' => $photo,
                'product_id' => Product::first()->id
            ]);
        }*/

        /*$photo = [
            'images/products/1.png', 'images/products/2.png', 'images/products/3.png',
            'images/products/3.png', 'images/products/4.png', 'images/products/5.png'
        ];*/

        $photo = 'images/products/1.png';

        /*$ids = Product::all()->pluck('id')->toArray();

        $sliced = array_slice($ids, 0, 2, true);

        $sliced_photos = array_slice($photos, 0, 3, true);

        foreach ($sliced as $slice) {
          
            foreach ($sliced_photos as $photo) 
            {
                
                   factory(App\Photo::class)->create([
                    'path' => $photo,
                    'product_id' => $slice
                    ]); 
               
            }
        }*/
        $products = Product::all();

        foreach ($products as $product) 
        {
            factory(App\Photo::class)->create([
                    'path' => 'images/products/'.random_int(1, 20) .'.png',
                    'product_id' => $product->id
                    ]); 
        }
    }
    // Product 1 prve 3, product 2 sledeca 3

    


}
