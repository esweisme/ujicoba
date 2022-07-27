<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class CarbonController extends Controller
{
    public function index(){

        $date = new Carbon;
        // $past = $date->subMonth(3);

        echo $date->now()->isoFormat('dddd, D MMMM Y');


    }
}
