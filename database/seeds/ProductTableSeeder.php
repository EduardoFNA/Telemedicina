<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/91A-UYTPd9L._UX342_.jpg',  
            'title' => 'Morral Ligero Gris',
            'description' => 'Excelente para tus actividades diarias. Ligero y compacto',
            'price' => 30
            ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://littleburgundy.blob.core.windows.net/images/products/1_138141_ZM.jpg',  
            'title' => 'Morral Vans Gris',
            'description' => 'Excelente para tus actividades diarias. Es tu estilo',
            'price' => 35
            ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://wildcraft.in/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/g/a/gayatri_490_day1_18pgs_july_3557_11.png',  
            'title' => 'Morral Wildcraft',
            'description' => 'Excelente para tus actividades diarias. Practico',
            'price' => 25
            ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://cdn.gearpatrol.com/wp-content/uploads/2018/08/The-25-Best-Backpacks-for-Everyday-Use-gear-patrol-The-North-Face-Berkeley-Backpack.jpg',  
            'title' => 'Morral The North Face',
            'description' => 'Excelente para tus actividades diarias. Garantizado',
            'price' => 29
            ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://media.decathlon.sg/1594144/arpenaz-hiking-1-day-backpack-10l-red-grey.jpg',  
            'title' => 'Morral Quechua Rojo',
            'description' => 'Excelente para tus actividades diarias. Muy compacto',
            'price' => 19
            ]);
        $product->save();
    }
}
