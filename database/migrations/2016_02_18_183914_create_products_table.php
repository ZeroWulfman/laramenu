<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuitems', function (Blueprint $table) {
            $table->increments('id');
            /* Set up connection to SubCategories Table*/
            $table->integer('sub_call')->unsigned()->index();
            $table->string('title');
            $table->string('image');
        });

        DB::table('menuitems')->insert([
            [
              "sub_call"=> "1",
              "title"=> "Mozzarella Sticks",
              "image"=> "/img/twofor/mozzarella_sticks.jpg"
            ],
            [
              "sub_call"=> "1",
              "title"=> "Crunchy Onion Rings",
              "image"=> "/img/twofor/onion_rings.jpg"
            ],
            [
              "sub_call"=> "1",
              "title"=> "Two Side Salads(House or Caesar)",
              "image"=> "/img/twofor/caesar_salad.jpg"
            ],
            [
              "sub_call"=> "2",
              "title"=> "Three-Cheese Chicken Penne",
              "image"=> "/img/twofor/chicken_penne.jpg"
            ],
            [
              "sub_call"=> "2",
              "title"=> "Chicken Tenders Basket",
              "image"=> "/img/twofor/chicken_tend.jpg"
            ],
            [
              "sub_call"=> "2",
              "title"=> "The American Standard",
              "image"=> "/img/twofor/allinburger.jpg"
            ],
            [
              "sub_call"=> "3",
              "title"=> "Hot Shot Whiskey Chicken",
              "image"=> "/img/better4u/bourbon_chicken.jpg"
            ],
            [
              "sub_call"=> "3",
              "title"=> "Savory Cedar Salmon",
              "image"=> "/img/better4u/salmon.jpg"
            ],
            [
              "sub_call"=> "3",
              "title"=> "Shrimp Wonton Stir-Fry",
              "image"=> "/img/better4u/shrimpWonton.jpg"
            ],
            [
              "sub_call"=> "4",
              "title"=> "Neighborhood Favorites",
              "image"=> "/img/beverages/beer.jpg"
            ],
            [
              "sub_call"=> "5",
              "title"=> "Neighborhood Favourites",
              "image"=> "/img/beverages/wines.jpg"
            ],
            [
              "sub_call"=> "6",
              "title"=> "Teas",
              "image"=> "/img/beverages/tea.jpg"
            ],
            [
              "sub_call"=> "6",
              "title"=> "Lemonades",
              "image"=> "/img/beverages/lemonades.jpg"
            ],
            [
              "sub_call"=> "6",
              "title"=> "Limeades",
              "image"=> "/img/beverages/limeades.jpg"
            ],
            [
              "sub_call"=> "7",
              "title"=> "Mushroom Swiss",
              "image"=> "/img/burgers/burger_mushroomswiss.jpg"
            ],
            [
              "sub_call"=> "7",
              "title"=> "Triple Bacon Burger",
              "image"=> "/img/burgers/burger_triplebacon.jpg"
            ],
            [
              "sub_call"=> "7",
              "title"=> "The American Standard",
              "image"=> "/img/burgers/burger_american.jpg"
            ],
            [
              "sub_call"=> "8",
              "title"=> "Cowboy Burger",
              "image"=> "/img/burgers/burger_triplebacon.jpg"
            ],
            [
              "sub_call"=> "8",
              "title"=> "Quesadilla Burger",
              "image"=> "/img/burgers/burger_american.jpg"
            ],
            [
              "sub_call"=> "8",
              "title"=> "The Classic",
              "image"=> "/img/burgers/burger_mushroomswiss.jpg"
            ],
            [
              "sub_call"=> "9",
              "title"=> "Triple Chocolate Meltdown",
              "image"=> "/img/desserts/triple_choc.jpg"
            ],
            [
              "sub_call"=> "9",
              "title"=> "Butter Pecan Blondie",
              "image"=> "/img/desserts/maple_blondie.jpg"
            ],
            [
              "sub_call"=> "9",
              "title"=> "Apple Chimi-Cheesecake",
              "image"=> "/img/desserts/apple_cheesecake.jpg"
            ],
            [
              "sub_call"=> "10",
              "title"=> "7oz Grilled Onion Sirloin with Stout Gravy",
              "image"=> "/img/mainEntrees/grilled_onion_sirloin.jpg"
            ],
            [
              "sub_call"=> "10",
              "title"=> "9oz House Sirloin",
              "image"=> "/img/mainEntrees/sirloin.jpg"
            ],
            [
              "sub_call"=> "10",
              "title"=> "Pepper-Crusted Sirloin & Whole Grains",
              "image"=> "/img/mainEntrees/pepper_sirloin.jpg"
            ],
            [
              "sub_call"=> "11",
              "title"=> "AppleBee's Riblets",
              "image"=> "/img/mainEntrees/riblets.jpg"
            ],
            [
              "sub_call"=> "11",
              "title"=> "Double-Glazed Baby Back Ribs",
              "image"=> "/img/mainEntrees/ribs.jpg"
            ],
            [
              "sub_call"=> "12",
              "title"=> "Crispy Chicken Brewhouse",
              "image"=> "/img/mainEntrees/brewhouse_chicken.jpg"
            ],
            [
              "sub_call"=> "12",
              "title"=> "Bourbon Street Chicken & Shrimp",
              "image"=> "/img/mainEntrees/bourbon_chicken.jpg"
            ],
            [
              "sub_call"=> "12",
              "title"=> "Chicken Tenders Platter",
              "image"=> "/img/mainEntrees/chicken_tenders.jpg"
            ],
            [
              "sub_call"=> "13",
              "title"=> "Shrimp Wonton Stir-Fry",
              "image"=> "/img/better4u/salmon.jpg"
            ],
            [
              "sub_call"=> "13",
              "title"=> "Savory Cedar Salmon",
              "image"=> "/img/better4u/salmon.jpg"
            ],
            [
              "sub_call"=> "13",
              "title"=> "Three-Cheese Chicken Penne",
              "image"=> "/img/better4u/salmon.jpg"
            ],
            [
              "sub_call"=> "14",
              "title"=> "Green Goddess Wedge",
              "image"=> "/img/better4u/salmon.jpg"
            ],
            [
              "sub_call"=> "14",
              "title"=> "Tomato Basil Soup",
              "image"=> "/img/better4u/salmon.jpg"
            ],
            [
              "sub_call"=> "14",
              "title"=> "French Onion Soup",
              "image"=> "/img/better4u/salmon.jpg"
            ],
            [
              "sub_call"=> "15",
              "title"=> "Tomato Basil Soup & French Onion Soup",
              "image"=> "/img/lunchCombos/meatballs.jpg"
            ],
            [
              "sub_call"=> "15",
              "title"=> "House Salad(Contains Bacon) & Clubhouse Grille",
              "image"=> "/img/lunchCombos/oriental_salad.jpg"
            ],
            [
              "sub_call"=> "15",
              "title"=> "Chicken Fajita Rollup & Shrimp Scampi Linguine",
              "image"=> "/img/lunchCombos/shrimp.jpg"
            ],
            [
              "sub_call"=> "16",
              "title"=> "Thai Shrimp Salad",
              "image"=> "/img/salads/ThaiShrimp.jpg"
            ],
            [
              "sub_call"=> "16",
              "title"=> "Fiesta Chicken Chopped Salad",
              "image"=> "/img/salads/FiestaChicken.jpg"
            ],
            [
              "sub_call"=> "16",
              "title"=> "Grilled Chicken Caesar Salad",
              "image"=> "/img/salads/ChickenCaesar.jpg"
            ],
            [
              "sub_call"=> "17",
              "title"=> "Shrimp Wonton Sitr-Fry",
              "image"=> "/img/pubdiet/ShrimpWonton.jpg"
            ],
            [
              "sub_call"=> "17",
              "title"=> "7oz Grilled Onion Sirloin with Stout Gravy",
              "image"=> "/img/pubdiet/SirloinStout.jpg"
            ],
            [
              "sub_call"=> "17",
              "title"=> "Cedar Grilled Lemon Chicken",
              "image"=> "/img/pubdiet/CedarChicken.jpg"
            ],
            [
              "sub_call"=> "18",
              "title"=> "Smores",
              "image"=> "/img/ikea/smores.jpg"
            ],
            [
              "sub_call"=> "18",
              "title"=> "Smore Smores",
              "image"=> "/img/ikea/smores.jpg"
            ],
            [
              "sub_call"=> "18",
              "title"=> "Smore Smore Smores",
              "image"=> "/img/ikea/smores.jpg"
            ],
            [
              "sub_call"=> "19",
              "title"=> "Spinach & Artichoke Dip",
              "image"=> "/img/snacks/churroSmores.jpg"
            ],
            [
              "sub_call"=> "19",
              "title"=> "Kobe-Style Meatballs",
              "image"=> "/img/snacks/kobeMeatballs.jpg"
            ],
            [
              "sub_call"=> "19",
              "title"=> "Sriracha Shrimp",
              "image"=> "/img/snacks/srirachaShrimp.jpg"
            ],
            [
              "sub_call"=> "20",
              "title"=> "Churro S'Mores",
              "image"=> "/img/snacks/churroSmores.jpg"
            ],
            [
              "sub_call"=> "20",
              "title"=> "Sweet & Spicy Pickles",
              "image"=> "/img/snacks/kobeMeatballs.jpg"
            ],
            [
              "sub_call"=> "20",
              "title"=> "Green Bean Crispers",
              "image"=> "/img/snacks/srirachaShrimp.jpg"
            ],
            [
              "sub_call"=> "21",
              "title"=> "Triple Hog Dare Ya",
              "image"=> "/img/Handhelds/triple_hog_dare_ya.jpg"
            ],
            [
              "sub_call"=> "21",
              "title"=> "Kickin' Turkey Stacker",
              "image"=> "/img/Handhelds/turkey_stacker.jpg"
            ],
            [
              "sub_call"=> "21",
              "title"=> "American BLT",
              "image"=> "/img/Handhelds/blt.jpg"
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menuitems');
    }
}
