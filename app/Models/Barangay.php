<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    use HasFactory;

    public function zones(){

        return $this->hasMany('App\Models\Zone');
    }

    public function clients (){
        return $this->hasMany('App\Models\Client');
    }
}
