<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
public function tweets(){
    return $this->belongsTo('App\Tweets');
}
}
