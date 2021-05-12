<?php

namespace App\Models;

use Akuechler\Geoly;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\Admin;

class City extends Model
{
    use HasFactory;
    use Geoly;


    function admin() {
        return $this->belongsTo(Admin::class);
    }

    function country() {
        return $this->belongsTo(Country::class);
    }




}
