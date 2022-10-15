<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Advertiser;
class AdvertiserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $advertiser = new Advertiser();
        $advertiser->name = "ali" ;
        $advertiser->email = "hboody81@gmail.com" ;
        $advertiser->save() ;
    }
}
