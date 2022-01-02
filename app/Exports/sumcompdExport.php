<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
class sumcompdExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  DB::table('camps')
        ->select('cuntary', DB::raw('count(compno) as compnototal'), DB::raw('count(city) as citytotal')
        , DB::raw('count(opd) as opdtotal')
        , DB::raw('count(surg) as surgtotal')
        , DB::raw('count(iol) as ioltotal')
        , DB::raw('count(glasses) as glassestotal')
        , DB::raw('start_date')
        )
        ->groupBy('cuntary')
        ->get();
    }
}
