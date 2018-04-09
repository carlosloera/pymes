<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use PDF;
use Barryvdh\DomPDF\Facade as PDF;
class PdfController extends Controller
{
    //

    public function index()
    {
        $data =['nombre'=>'carlos'];
        //set_time_limit(300);
        //$data = ['name'=>'carlos'];
        $pdf = PDF::loadView('documentalAnalisis',compact('data'));
        return $pdf->download('ejemplo.pdf');
        //return ("holla");
    }
}
