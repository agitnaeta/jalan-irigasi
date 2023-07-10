<?php

namespace App\Http\Controllers;

use App\Exports\IrigasiExport;
use App\Exports\JalanExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function exportIrigasi()
    {
        return Excel::download(new IrigasiExport(), 'irigasi.xlsx');
    }
    public function exportJalan()
    {
        return Excel::download(new JalanExport(),'jalan.xlsx');
    }
}
