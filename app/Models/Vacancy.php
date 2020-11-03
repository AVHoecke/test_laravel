<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    
    public function companies()
    {
        return $this->belongsTo('App/Models/Company');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
}
