<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
class Ad extends Model
{
    protected $guarded =[];

    public function category()
    {
        return $this->belongsTo('App\Models\Category' ,'category_id');
    }
    public function advertiser()
    {
        return $this->belongsTo('App\Models\Advertiser' ,'advertiser_id');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'ad_tags');
    }
}
