<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ad ;
class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ad = new Ad ();
        $ad->type = 0 ;
        $ad->title ="shoes" ;
        $ad->description ="new shoes" ;
        $ad->start_date ="2022-10-16";
        $ad->category_id = 1 ;
        $ad->advertiser_id =1 ;
        $ad->save();

        $ad = new Ad ();
        $ad->type = 0 ;
        $ad->title ="Bag" ;
        $ad->description ="new Bag" ;
        $ad->start_date ="2022-10-17";
        $ad->category_id = 1 ;
        $ad->advertiser_id =1 ;
        $ad->save();

        $ad = new Ad ();
        $ad->type = 0 ;
        $ad->title ="mobile" ;
        $ad->description ="new mobile" ;
        $ad->start_date ="2022-10-18";
        $ad->category_id = 2 ;
        $ad->advertiser_id =1 ;
        $ad->save();

        $ad = new Ad ();
        $ad->type = 0 ;
        $ad->title ="laptop" ;
        $ad->description ="new laptop" ;
        $ad->start_date ="2022-10-19";
        $ad->category_id = 2 ;
        $ad->advertiser_id =1 ;
        $ad->save();
    }
}
