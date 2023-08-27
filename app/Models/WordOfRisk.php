<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordOfRisk extends Model
{
    use HasFactory;

    public function risk()
    {
        return $this->belongsTo('App\Models\Risk', 'id_risk');
    }
}