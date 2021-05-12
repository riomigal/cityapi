<?php

namespace App\Http\Controllers;

use Akuechler\Geoly;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{


    use Geoly;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $worldCities = DB::table('worldcities')->paginate(10);

       foreach($worldCities as $worldcity){
            $city = City::where('old_id', $worldcity->id)->first();
            $city->longitude = $worldcity->lng;
            $city->latitude = $worldcity->lat;
            $city->save();

       }

    }



}
