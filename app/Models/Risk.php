<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    use HasFactory;

    public function wordOfRisk()
    {
        return $this->hasMany('App\Models\WordOfRisk', 'id_risk');
    }

    public function placesOfRisk()
    {
        return $this->hasMany('App\Models\PlacesOfRisk', 'id_risk');
    }

    public function review()
    {
        return $this->hasMany('App\Models\Reviews', 'id_risk');
    }
}
