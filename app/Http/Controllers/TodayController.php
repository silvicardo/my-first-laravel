<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodayController extends Controller
{
    public function laDataDiOggi() {
       return date("Y-m-d H:i:s");
    }
}
