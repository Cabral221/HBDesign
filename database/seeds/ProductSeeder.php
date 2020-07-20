<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 7; $i++) { 
            $product = Product::create([
                'libele' => 'produit '.$i
            ]);

            if ($i > 4) {
                $product->images()->create([ 'image' => 'img/product/product'.$i.'.JPG' ]);
            }else{
                $product->images()->create([ 'image' => 'img/product/product'.$i.'.JPG' ]);
                $product->images()->create([ 'image' => 'img/product/product'.$i.'2.JPG' ]);
            }

        }

    }
}
