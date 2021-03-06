<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['content'];

    public function user()
    {
        //echo User::class;
        return $this->belongsTo(User::class);
    }
}
