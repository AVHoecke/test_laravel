<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyType extends Model
{
    use HasFactory;
    
    public function vacancies()
    {
        return $this->hasMany('App\models\Vacancy');
    }
}
