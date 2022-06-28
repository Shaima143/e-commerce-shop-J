<?php

use Illuminate\Database\Seeder;
use app\product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
              'name'=>'black shoes',
              'price'=>'20',
              'description'=>'black shoes ',
              'category'=>'men',
              'gallery'=>'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1587065460-Mens-193-Royale-TripleBlack-3RBW-Product-102_987ae47c-343a-4a46-9902-2f233bd5452c.jpg'
        ],
    ['name'=>'white shoes',
    'price'=>'30',
    'description'=>'white shoes for your amazing outfit',
    'category'=>'men',
    'gallery'=>'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1632340859-202102_ND_1000Fell_white_02_r_3_2048x.jpg'],
     ['name'=>'yellow shoes',
     'price'=>'50',
     'description'=>'white shoes for your amazing wife',
     'category'=>'women',
     'gallery'=>'https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_210,c_limit,fl_progressive/assets/images/15354214/2021/9/3/479abf43-e98e-4b44-aabc-87cc4a9b10911630687228291TWINTOESWomenYellowColourblockedSneakers1.jpg']
    ]);}
}
