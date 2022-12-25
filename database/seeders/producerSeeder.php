<?php

namespace Database\Seeders;

use App\Models\Producer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class producerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producer::create([
            'name' => 'Seeds of Change Organic Quinoa',
            'description' =>
            '
            Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.
            Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.
            ',
            'image' => 'website/assets/imgs/shop/product-1-1.jpg',
            'salary' => 38,
            'discount' => 52,
            'public_unpublic' => 'public',
            'language_id' => 1,
        ]);
        Producer::create([
            'name' => 'Mango',
            'description' =>
            'brichly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over.
            ',
            'image' => 'website/assets/imgs/shop/product-17.jpg',
            'salary' => 30,
            'discount' => 35,
            'public_unpublic' => 'public',
            'language_id' => 1,
        ]);
        Producer::create([
            'name' => 'SweetLeaf',
            'description' =>
            '
            SweetLeaf is an all-natural sweetener derived from the stevia leaf. Known for its product benefits, SweetLeaf is America’s first zero-calorie, zero-carbohydrate, certified-paleo, non-glycemic-response sweetener, and the only stevia brand to win over 36 awards for taste and innovation.
            ',
            'image' => 'website/assets/imgs/shop/product-15-1.jpg',
            'salary' => 30,
            'discount' => 35,
            'public_unpublic' => 'public',
            'language_id' => 3,
        ]);
        Producer::create([
            'name' => 'Reishi Coffee 2 in 1',
            'description' =>
            '
            2-in-1 All Natural Dietary Supplement Great Tasting Instant Formula! Helps Support a Healthy Immune System Supports General Health and Well Being Supports Healthy Energy Levels Longreen Reishi Coffee is enriched with a premium reishi (Ganoderma lucidum) extract and a gourmet quality, robust-tasting coffee, making it one of the most delicious and health-supportive coffee beverages. This Innovative 2-in-1 Columbian coffee gives just the right perk you need to jumpstart your day. And with the health-supporting qualities of Reishi Mushroom (Ganoderma lucidum), this will surely be the perfect gift for family and friends year-round! Now you ll experience a blend of the properties of both Reishi & Coffee, together with an aroma and taste you will fall in love with.
            ',
            'image' => 'website/assets/imgs/shop/product-12-1.jpg',
            'salary' => 30,
            'discount' => 35,
            'public_unpublic' => 'public',
            'language_id' => 3,
        ]);
        Producer::create([
            'name' => 'unsweetened cocoa flakes',
            'description' =>
            '
            The smooth texture of our premium cocoa powder is the perfect ingredient needed for cakes, biscuits, cookies or milk beverages. Benefits: In addition to its succulent taste, our cocoa powder is made of premium quality cocoa beans, without artificial additives, which gives you the full health benefits of pure cocoa powder, including reduced high blood pressure, improved blood flow to your brain and enhancing your mood.
            ',
            'image' => 'website/assets/imgs/shop/product-5-1.jpg',
            'salary' => 20,
            'discount' => 25,
            'public_unpublic' => 'public',
            'language_id' => 1,
        ]);
        Producer::create([
            'name' => 'mighty muffin',
            'description' =>
            '
            Wanna know how we roll? It’s with sweet cinnamon and warm glaze glistening with gooey goodness. That’s right, FlapJacked Cinnamon Roll Mighty Muffins come with
            ',
            'image' => 'website/assets/imgs/shop/product-6-1.jpg',
            'salary' => 17.5,
            'discount' => 19.5,
            'public_unpublic' => 'public',
            'language_id' => 2,
        ]);
        Producer::create([
            'name' => 'headphones',
            'description' =>
            '
            Pure bass miracle: the wireless tune headphones shine with unbeatable JBL Pure Bass sound quality and rich, powerful bass - for a feeling of being in the middle instead of just there
            ',
            'image' => 'website/assets/imgs/shop/cat-15.png',
            'salary' => 30,
            'discount' => 90,
            'public_unpublic' => 'public',
            'language_id' => 3,
        ]);
        // ////
        Producer::create([
            'name' => 'Dove Shampoo Intensive Repair 350ml',
            'description' =>
            '
            Dove Intense Repair Shampoo, with Bio Restore complex, helps repair your hair from damage. A drop of Bio-Restore+ penetrates deep inside hair, rejuvenates and strengthens fibres and brings hair back to life

            Note: For comprehensive benefits, use with Dove Nutritive Solutions Intense Repair Conditioner

            ',
            'image' => 'website/assets/imgs/shop/1.jpg',
            'salary' => 45,
            'discount' => 50,
            'public_unpublic' => 'public',
            'language_id' => 1,
        ]);
        Producer::create([
            'name' => 'Arrow Large Oven Bags - 3 Pieces',
            'description' =>
            '
            If youre too busy to get to the grocery store, there are many ways for the grocery store to come to you! We are offering different food bundles providing all your everyday basics essentials to be shipped right to you. We are Saving your time, stress, gas money, and exposing you to new types of foods and brands that you cant get at your local grocery store.
            ',
            'image' => 'website/assets/imgs/shop/2.jpg',
            'salary' => 44,
            'discount' => 45,
            'public_unpublic' => 'public',
            'language_id' => 3,
        ]);
        Producer::create([
            'name' => 'Hero Baby',
            'description' =>
            '
            o the grocery store, there are many ways for the grocery store to come to you! We are offering different food bundles providing all your everyday basics essentials to be shipped right to you. We are Saving your time, stress, gas money, and exposing you to new types of foods and brands that you cant get at your local gr            ',
            'image' => 'website/assets/imgs/shop/3.jpg',
            'salary' => 33.5,
            'discount' => 35,
            'public_unpublic' => 'public',
            'language_id' => 3,
        ]);


    }
}
