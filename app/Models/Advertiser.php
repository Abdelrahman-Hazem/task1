<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    public function ads()
    {
     return $this->hasMany('App\Models\Ad' ,'advertiser_id');
    }
}
