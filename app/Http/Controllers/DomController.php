<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class DomController extends Controller
{
    public function index()
    {
        $pdf   = PDF::loadview('cetak.cetak');
        return $pdf->stream('cetak domPDF.pdf');
    }
}
