<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function user()
    {
        //echo User::class;
        return $this->belongsTo(User::class);
    }
}
