<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    public function barangay(){

        return $this->belongsTo('App\Models\Barangay');
    }

    public function clients (){
        return $this->hasMany('App\Models\Client');
    }
}
