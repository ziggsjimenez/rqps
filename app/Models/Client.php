<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name','age', 'bday','zone_id','barangay_id','refnum'];

    public function zone(){
        return $this->belongsTo('App\Models\Zone');
    }

    public function barangay(){
        return $this->belongsTo('App\Models\Barangay');
    }
}
