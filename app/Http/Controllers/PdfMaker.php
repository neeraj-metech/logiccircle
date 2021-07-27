<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PdfMaker extends Controller
{
    function generator(){
    	$pdf = App::make('dompdf.wrapper');
    	$pdf->loadHTML('<h1>Test</h1>');
    	// return $pdf->stream();
    	// return $pdf->download('invoice.pdf');
    	$path = asset('storage/pdf/first.pdf');
    	 return $pdf->save($path)->stream('download.pdf');


    }
}
