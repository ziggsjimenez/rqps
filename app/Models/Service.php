<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name','office_id','image'];

    public function servicetype(){
        return $this->belongsTo('App\Models\Servicetype');
    }


}
