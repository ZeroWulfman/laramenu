<?php

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
        DB::table('products')->insert([
            [
                'sub_id' => 17,
                'title' => 'Shrimp Wonton Sitr-Fry',
                'image' => '/img/pubdiet/ShrimpWonton.jpg'
            ],
            [
                'sub_id' => 17,
                'title' => '7oz Grilled Onion Sirloin with Stout Gravy',
                'image' => '/img/pubdiet/SirloinStout.jpg'
            ],
            [
                'sub_id' => 17,
                'title' => 'Cedar Grilled Lemon Chicken',
                'image' => '/img/pubdiet/CedarChicken.jpg'
            ],
            [
                'sub_id' => 18,
                'title' => 'Smores',
                'image' => '/img/ikea/smores.jpg'
            ],
            [
                'sub_id' => 18,
                'title' => 'Smore Smores',
                'image' => '/img/ikea/smores.jpg'
            ],
            [
                'sub_id' => 18,
                'title' => 'Smore Smore Smores',
                'image' => '/img/ikea/smores.jpg'
            ],
            [
                'sub_id' => 19,
                'title' => 'Spinach & Artichoke Dip',
                'image' => '/img/snacks/churroSmores.jpg'
            ],
            [
                'sub_id' => 19,
                'title' => 'Kobe-Style Meatballs',
                'image' => '/img/snacks/meatballs.jpg'
            ],
            [
                'sub_id' => 19,
                'title' => 'Sriracha Shrimp',
                'image' => '/img/snacks/srirachaShrimp.jpg'
            ],
            [
                'sub_id' => 20,
                'title' => 'Churro S\'Mores',
                'image' => '/img/snacks/churroSmores.jpg'
            ],
            [
                'sub_id' => 20,
                'title' => 'Sweet & Spicy Pickles',
                'image' => '/img/snacks/kobemeatballs.jpg'
            ],
            [
                'sub_id' => 20,
                'title' => 'Green Bean Crispers',
                'image' => '/img/snacks/srirachaShrimp.jpg'
            ],
            [
                'sub_id' => 21,
                'title' => 'Triple Hog Dare Ya',
                'image' => '/img/Handhelds/triple_hog_dare_ya.jpg'
            ],
            [
                'sub_id' => 21,
                'title' => 'Kickin\' Turkey Stacker',
                'image' => '/img/Handhelds/turkey_stacker.jpg'
            ],
            [
                'sub_id' => 21,
                'title' => 'American BLT',
                'image' => '/img/Handhelds/blt.jpg'
                ]
            ]);
    }
}
