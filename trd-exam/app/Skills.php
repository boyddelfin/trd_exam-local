<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Skills extends Model
{
    public $timestamps = false;

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
