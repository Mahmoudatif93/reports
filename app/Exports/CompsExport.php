<?php

namespace App\Exports;

use App\camp;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CompsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return camp::all();
    }
    public function headings(): array
    {
        return ["id","sno", "type", "compno","year", "date", "city","cuntary", "opd","surg", "iol"
                 ,"phaco", "glasses", "med_tablet","med_drops", "photo", "photo_date"
                 ,"vedio", "vedio_date", "camp_team","start_date", "end_date", "sponsors"
                 ,"medical report", "static report", "final report","Created At","Updated At"
                ];
    }

}
