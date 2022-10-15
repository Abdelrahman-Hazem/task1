<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdTag;
class AdTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ad_tag = new AdTag ;
        $ad_tag->ad_id = 1 ;
        $ad_tag->tag_id = 1 ;
        $ad_tag-> save() ;

        $ad_tag = new AdTag ;
        $ad_tag->ad_id = 2 ;
        $ad_tag->tag_id = 2 ;
        $ad_tag-> save() ;

        $ad_tag = new AdTag ;
        $ad_tag->ad_id = 3 ;
        $ad_tag->tag_id = 3 ;
        $ad_tag-> save() ;

        $ad_tag = new AdTag ;
        $ad_tag->ad_id = 4 ;
        $ad_tag->tag_id = 4 ;
        $ad_tag-> save() ;
    }
}
