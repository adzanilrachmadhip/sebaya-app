<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'inputed_by');
    }

    public function risk()
    {
        return $this->belongsTo('App\Models\Risk', 'id_risk');
    }

    public function places()
    {
        return $this->belongsTo('App\Models\Places', 'id_places');
    }
}
