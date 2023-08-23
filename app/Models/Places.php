<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    use HasFactory;

    public function placesOfRisk()
    {
        return $this->hasMany('App\Models\PlacesOfRisk', 'id_places');
    }

    public function review()
    {
        return $this->hasMany('App\Models\Reviews', 'id_places');
    }
}
