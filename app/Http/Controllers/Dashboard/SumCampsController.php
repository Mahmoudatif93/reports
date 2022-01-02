<?php

namespace App\Http\Controllers\Dashboard;

use App\camp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use PDF;
use DB;
use App\Exports\sumcompdExport;
use Maatwebsite\Excel\Facades\Excel;


class SumCampsController extends Controller
{
    public function index(Request $request)
    {
     

        $comps = DB::table('camps')
                 ->select('cuntary',
                  DB::raw('count(compno) as compnototal'), DB::raw('count(city) as citytotal')
                 , DB::raw('count(opd) as opdtotal')
                 , DB::raw('count(surg) as surgtotal')
                 , DB::raw('count(iol) as ioltotal')
                 , DB::raw('count(glasses) as glassestotal')
                 , DB::raw('start_date ')
               //  , DB::raw('SELECT  end_date  ORDER BY id ASC')
                 )
                 
                 ->groupBy('cuntary')
                 ->get();
        
               
            


             


       // dd($comps);

        return view('dashboard.sumcomps.index', compact( 'comps'));
    } //end of index

    public function create()
    {
  
        
        return view('dashboard.comps.create');
    } //end of create

 
    public function export() 
    {
            
        return Excel::download( new sumcompdExport, 'totalcamp.xlsx');
    }



}//end of controller
