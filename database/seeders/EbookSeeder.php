<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ebook')->insert([
            ['title' => 'Sambal Shiok: The Malaysian Cookbook', 'author' => 'Mandy Yin', 'description' => 'A soulful tribute to Malaysian cuisine, from snacks, soups and salads, to rice and noodle dishes, curries and sweet things.'],
            
            ['title' => 'All Day Baking: Savoury, Not Sweet', 'author' => 'Pippa James', 'description' => 'For every two lovers of sweet baked treats, there is at least another who will take the gruyere gougere or the curry pastie every time, thank you. All Day Baking: Savoury, Not Sweet is a baking cookbook – at last – for them. Its mission is to deliver comforting, inventive and wholegrain-forward ideas for pies, sausage rolls, pasties and myriad other mostly pastry-based recipes, alongside gutsy accompaniments that equip the reader with the tools to transform delicious bakes into nourishing any-time-of-day meals.'],
            
            ['title' => 'Maangchi Big Book of Korean Cooking: From Everyday Meals to Celebration Cuisine', 'author' => 'Maangchi and Martha Rose Shulman', 'description' => 'The book contains the favorite dishes Maangchi has perfected over the years, from Korean barbecue and fried chicken to bulgogi and bibimbap. It explores topics not covered in other Korean cookbooks, from the vegan fare of Buddhist mountain temples to the inventive snacks of street vendors to the healthful, beautiful lunch boxes Korean mothers make for their kids. Maangchi has updated and improved the traditional dishes, without losing their authentic spirit.'],
            
            ['title' => 'It Ends With Us', 'author' => 'Colleen Hoover', 'description' => 'Sometimes it is the one who loves you who hurts you the most.'],

            ['title' => 'Gone With the Wind', 'author' => 'Margaret Mitchell', 'description' => 'American classic in which a manipulative woman and a roguish man carry on a turbulent love affair in the American south during the Civil War and Reconstruction.'],

            ['title' => 'Riwayat Tionghoa Peranakan di Jawa (The History of Peranakan Chinese in Java)', 'author' => 'Ong Hok Ham', 'description' => 'Socioeconomic history of Chinese Indonesian in Java, Indonesia.'],

            ['title' => 'Buru Quartet', 'author' => 'Pramoedya Ananta Toer', 'description' => 'Contains 4 books']

        ]);
    }
}
