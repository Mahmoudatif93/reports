<?php

namespace App\Exports;

use App\camp;
use Maatwebsite\Excel\Concerns\FromCollection;

class CompsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return camp::all();
    }
}
