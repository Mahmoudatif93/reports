<?php

namespace App\Imports;

use App\camp;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CampImport implements ToModel, WithHeadingRow
{
    

    public function model(array $row)
    {
        return new camp([
            'sno'     => $row['sno'],
            'type'    => $row['type'],
            'compno'     => $row['compno'],
            'year'    => $row['year'],
            'date'     => $row['date'],
            'city'    => $row['city'], 
            'cuntary'     => $row['cuntary'],
            'opd'    => $row['opd'],
            'surg'     => $row['surg'],
            'iol'    => $row['iol'],
            'phaco'     => $row['phaco'],
            'glasses'    => $row['glasses'],
            'med_tablet'     => $row['med_tablet'],
            'med_drops'    => $row['med_drops'],
            'photo'     => $row['photo'],
            'photo_date'    => $row['photo_date'],
            'vedio'     => $row['vedio'],
            'vedio_date'    => $row['vedio_date'],
            'camp_team'     => $row['camp_team'],
            'start_date'    => $row['start_date'],
            'end_date'     => $row['end_date'],
            'sponsors'    => $row['sponsors']
           
        ]);
    }
}
