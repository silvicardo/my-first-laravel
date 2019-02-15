<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodayController extends Controller
{

    /*
    Il file web.php richiede l'esecuzione
    della funzione laDataDiOggi in questo
    controller,
    il controller esegue la funzione e
    restituisce a sua volta la view con
    in dote dei dati
    */


    public function laDataDiOggi() {
       $dataDiOggi= date("Y-m-d H:i:s");

       return view('oggi', compact('dataDiOggi'));
    }
}
