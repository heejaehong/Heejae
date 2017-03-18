<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slideimage extends Model
{
    public function work()
    {
        return $this->belongsTo(Work::class);
    }
}
