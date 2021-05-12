<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;
use App\Models\City;

class Country extends Model
{
    use HasFactory;

    function cities() {
        return $this->hasMany(City::class);
    }

    function admins() {
        return $this->hasMany(Admin::class);
    }
}
