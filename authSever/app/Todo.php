<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //
    protected $fillable = [
        'title','date', 'type',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
