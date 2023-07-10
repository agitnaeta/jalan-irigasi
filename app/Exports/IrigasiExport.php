<?php

namespace App\Exports;

use App\Models\Irigasi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class IrigasiExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Irigasi::all();
    }

    public function view(): View
    {
        $irigasi = $this->collection();
        return view('export.irigasi',compact('irigasi'));
    }
}
