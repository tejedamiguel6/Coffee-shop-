<?php

use Illuminate\Database\Seeder;

class CoffeeProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\CoffeeProducts([
            'imagePath' => 'http://www.antad.biz/uploads/400x400_rudqQzaDom.jpg',
            'title' => 'Coffee',
            'description' => 'Venezuelan Coffe',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\CoffeeProducts([
            'imagePath' => 'https://i5.walmartimages.com/asr/57997b1e-0ec9-4989-8649-354944bd26ea_1.2f37767259b0098a2946af77357162cc.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF',
            'title' => 'Verana',
            'description' => 'Starbucks Coffee, its good. The Verana',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\CoffeeProducts([
            'imagePath' => 'https://www.folgerscoffee.com/folgers/images/our-coffees/products/main/large_coffehouse_blend.jpg',
            'title' => 'Folgers',
            'description' => 'Folgers classic coffee, its not so good',
            'price' => 7
        ]);
        $product->save();

        $product = new \App\CoffeeProducts([
            'imagePath' => 'https://i5.walmartimages.com/asr/406e91bc-278c-49ce-8329-eb3301166149_1.5b3919c63354d180ee9f0ebb3b897962.jpeg',
            'title' => 'Coffee',
            'description' => 'Starbucks Coffee Summatra, earthy herbal coffee',
            'price' => 14
        ]);
        $product->save();

        $product = new \App\CoffeeProducts([
            'imagePath' => 'https://www.hilinecoffee.com/wp-content/uploads/McCafe-Packaged-300x225.jpg',
            'title' => 'McCafee',
            'description' => 'Mcdonalds coffee. cheap and somewhat decent',
            'price' => 8
        ]);
        $product->save();
    }
}
