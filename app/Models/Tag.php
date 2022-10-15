<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function ads()
    {
        return $this->belongsToMany('App\Models\Ad', 'ad_tags');
    }
}
