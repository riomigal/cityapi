<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\City;


class Admin extends Model
{
    use HasFactory;


    function cities() {
        return $this->hasMany(City::class);
    }

    function country() {
        return $this->belongsTo(Country::class);
    }
}
