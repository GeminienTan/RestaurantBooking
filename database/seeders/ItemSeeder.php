<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'Aglio Olio',
                'description' => 'Olive Oil + Pork Bacon + Mushroom Chicken',
                'price' => '18.90',
                'category' => 'food',
                'photo' => 'public/img/aglio_olio.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Curry Pasta',
                'description' => 'Homecook Curry Chicken',
                'price' => '18.90',
                'category' => 'food',
                'photo' => 'public/img/curry_pasta.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Pesto Pasta',
                'description' => 'Homemade Pesto + Mushroom Chicken',
                'price' => '18.90',
                'category' => 'food',
                'photo' => 'public/img/pesto_pasta.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Bagel Love',
                'description' => 'Bagel + Egg + Bacon + Greens + Fries',
                'price' => '18.90',
                'category' => 'food',
                'photo' => 'public/img/bagel_love.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Fish Fillet Cheese Burger',
                'description' => 'Sesame Bun + Mozzarella + Deep Sea Fish + Greens + Fries',
                'price' => '17.90',
                'category' => 'food',
                'photo' => 'public/img/fish_fillet_burger.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Chicken Charcoal Burger',
                'description' => 'Charcoal Bun + Special Marinated Chicken + Greens + Fries',
                'price' => '21.90',
                'category' => 'food',
                'photo' => 'public/img/chicken_charcoal_burger.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Mr. Potato',
                'description' => 'Sweet Potato Fries + Tater Tots + Fries',
                'price' => '10.00',
                'category' => 'food',
                'photo' => 'public/img/chicken_charcoal_burger.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Mango Tango',
                'description' => 'Warm Waffle + Sliced Manage + Vanilla Ice Cream',
                'price' => '19.90',
                'category' => 'dessert',
                'photo' => 'public/img/mango_tango.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Nuna Waffle',
                'description' => 'Sweet Waffle + Nutella + Chocolate Ice Cream',
                'price' => '14.90',
                'category' => 'dessert',
                'photo' => 'public/img/nuna_waffle.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Passion Dream',
                'description' => 'Sweet Waffle + Passion Fruit + Vanilla Ice Cream',
                'price' => '14.90',
                'category' => 'dessert',
                'photo' => 'public/img/mango_tango.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Banana Kick',
                'description' => 'Warm Waffle + Sliced Banana + Chocolate Ice Cream',
                'price' => '18.90',
                'category' => 'dessert',
                'photo' => 'public/img/banana_kick.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Latte',
                'description' => 'Dark roast espresso topped with steamed milk',
                'price' => '6.90',
                'category' => 'beverage',
                'photo' => 'public/img/latte.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Cappuccino',
                'description' => 'Espresso, steamed milk and a sikly layer of foam',
                'price' => '7.90',
                'category' => 'beverage',
                'photo' => 'public/img/cappuccino.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Caramel Mocha',
                'description' => 'Rich chocolate milk, caramel syrup and dark roast espresso',
                'price' => '11.90',
                'category' => 'beverage',
                'photo' => 'public/img/caramel_mocha.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Caramel Hazelnut',
                'description' => 'Marriage of caramel and hazelnut, steamed chocolate and deep espresso.',
                'price' => '11.90',
                'category' => 'beverage',
                'photo' => 'public/img/caramel_hazelnut.jpg',
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()
            ],
            
        ]);
    }
}
