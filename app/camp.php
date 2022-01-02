<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class camp extends Model
{
    protected $fillable = [
        'sno','type', 'compno','year', 'date','city', 'cuntary','opd', 'iol','phaco', 
        'glasses','med_tablet', 'med_drops','photo', 'photo_date','vedio', 'vedio_date','camp_team', 'start_date',
        'end_date', 'sponsors','medicalreport','staticreport','finalreport','surg'
    
    ];



}
