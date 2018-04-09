<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Elibyy\TCPDF\Facades\TCPDF;
class PdfDemoController extends Controller
{
    
    public function index()
    {
        return view('PdfDemo');
    }

    public function samplePdf()
    {
        $html = "<h1>generate a pdf using </h1>";
        
        PDF::SetTitle('sample Pdf');
        PDF::AddPage();
        PDF::writeHTML($html,true,false,true,false,'');
        PDF::Output('samplePdf.pdf');

    }

    public function savePdf()
    {
        $html = "<h1>Generate pdf</h1>";
        PDF::AddPage();
        PDF::writeHTML($html,true,false,true,false,'');
        PDF::Output(public_path(uniqid(),'samplePdf.pdf'),"F");
    }

    public function htmlToPdf()
    {
        $pdf = PDF::loadView('a');

        return $pdf->download('ejemplo.pdf');
        /*$view = \View::make('a');
        $html = $view->render();
        PDF::SetTitle('sample Pdf');
        PDF::AddPage();
        PDF::writeHTML($html,true,false,true,false,'');
        PDF::Output(public_path(uniqid().'samplePdf.pdf'),"F");
        //PDF::AddPage();
        //PDF::writeHTML($html,true,false,true,false,'');
        //PDF::Output(public_path(uniqid(),'samplePdf.pdf'),"F");
    */
    }

}
