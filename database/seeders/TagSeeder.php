<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag ;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag ;
        $tag->name = "menfashion" ;
        $tag->save();

        $tag = new Tag ;
        $tag->name = "womenfashion" ;
        $tag->save();

        $tag = new Tag ;
        $tag->name = "apple" ;
        $tag->save();

        $tag = new Tag ;
        $tag->name = "hp" ;
        $tag->save();
    }
}
