<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    //
    public function index($id) 
    {
    	$pdf = PDF::loadView('pdf.sample', [
    		'title' => 'CodeAndDeploy.com Laravel Pdf Tutorial',
    		'description' => 'This is an example Laravel pdf tutorial.',
    		'footer' => 'by <a href="https://codeanddeploy.com">codeanddeploy.com</a>',
            'id'=>$id
    	]);
    
        return $pdf->download('sample.pdf');
    }
}
