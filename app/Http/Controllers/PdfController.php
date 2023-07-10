<?php

namespace App\Http\Controllers;

use App\Models\Irigasi;
use App\Models\Jalan;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function printIrigasi()
    {
        $irigasi  = Irigasi::all();
        $pdf =  Pdf::loadView('export.irigasi',compact('irigasi'));
        return $pdf->stream();
    }
    public function printJalan()
    {
        $jalan  = Jalan::all();
        $pdf =  Pdf::loadView('export.jalan',compact('jalan'));
        return $pdf->stream();
    }
}
