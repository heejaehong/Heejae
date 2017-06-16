<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //
    protected $fillable = [
        'project_id','title', 'description', 'due_date', 'status',
    ];
}
