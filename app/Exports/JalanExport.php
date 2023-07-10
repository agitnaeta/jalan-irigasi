<?php

namespace App\Exports;

use App\Models\Jalan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class JalanExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Jalan::all();
    }


    public function view(): View
    {
        $jalan = $this->collection();
        return view('export.jalan',compact('jalan'));
    }
}
