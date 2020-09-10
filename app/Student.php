<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $guarded  = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
