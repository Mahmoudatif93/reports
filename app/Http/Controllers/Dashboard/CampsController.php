<?php

namespace App\Http\Controllers\Dashboard;

use App\camp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use PDF;
use App\Exports\CompsExport;
use App\Imports\CampImport;
use Maatwebsite\Excel\Facades\Excel;
class CampsController extends Controller
{
    public function index(Request $request)
    {
     

        $comps = camp::when($request->search, function ($q) use ($request) {

            return $q->where('sponsors', 'like', '%' . $request->search . '%')
            ->orWhere('year', 'like', '%' . $request->search . '%')
            ->orWhere('sno', 'like', '%' . $request->search . '%')
            ->orWhere('cuntary', 'like', '%' . $request->search . '%')
            ->orWhere('camp_team', 'like', '%' . $request->search . '%');

        })->paginate(8);

        // dd();

        return view('dashboard.comps.index', compact( 'comps'));
    } //end of index

    public function create()
    {
  
        
        return view('dashboard.comps.create');
    } //end of create

    public function store(Request $request)
    {

    

        $rules = [
            'sno' => 'required',
            'type' => 'required',
            'compno' => 'required',
            'year' => 'required',
            'date' => 'required',
            'city' => 'required',
            'cuntary' => 'required',
            'opd' => 'required',
            'iol' => 'required',
            'phaco' => 'required',
            'glasses' => 'required',
            'med_tablet' => 'required',
            'med_drops' => 'required',
            'photo' => 'required',
            'photo_date' => 'required',
            'vedio' => 'required',
            'vedio_date' => 'required',
            'camp_team' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'sponsors' => 'required',
          //  'medicalreport' => 'required',
            //'staticreport' => 'required',
            //'finalreport' => 'required',



        ];

        $request->validate($rules);

        $request_data = $request->all();

 

          
        if ( $request->hasFile('medicalreport')) {
            $file = $request->file('medicalreport');
            $filename = time() . '.' . $request->file('medicalreport')->extension();
            $filePath = public_path('uploads/camp/');
            $file->move($filePath, $filename);
          
            $request_data['medicalreport'] = $filename;
        }//end of if

        if ( $request->hasFile('staticreport')) {
            $file = $request->file('staticreport');
            $filename = time() . '.' . $request->file('staticreport')->extension();
            $filePath = public_path('uploads/camp/');
            $file->move($filePath, $filename);
          
            $request_data['staticreport'] = $filename;
        }//end of if

        
        if ( $request->hasFile('finalreport')) {
            $file = $request->file('finalreport');
            $filename = time() . '.' . $request->file('finalreport')->extension();
            $filePath = public_path('uploads/camp/');
            $file->move($filePath, $filename);
          
            $request_data['finalreport'] = $filename;
        }//end of if

        camp::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.comps.index');
    } //end of store

    public function edit($id)
    {
   
         $category=camp::where('id',$id)->first();
 
        return view('dashboard.comps.edit', compact( 'category'));
    } //end of edit

    public function update(Request $request, camp $product)
    {
     

        $request_data = $request->all();
    
  

        if ( $request->hasFile('medicalreport')) {
            $file = $request->file('medicalreport');
            $filename = time() . '.' . $request->file('medicalreport')->extension();
            $filePath = public_path('uploads/camp/');
            $file->move($filePath, $filename);
          
            $request_data['medicalreport'] = $filename;
        }//end of if

        if ( $request->hasFile('staticreport')) {
            $file = $request->file('staticreport');
            $filename = time() . '.' . $request->file('staticreport')->extension();
            $filePath = public_path('uploads/camp/');
            $file->move($filePath, $filename);
          
            $request_data['staticreport'] = $filename;
        }//end of if

        
        if ( $request->hasFile('finalreport')) {
            $file = $request->file('finalreport');
            $filename = time() . '.' . $request->file('finalreport')->extension();
            $filePath = public_path('uploads/camp/');
            $file->move($filePath, $filename);
          
            $request_data['finalreport'] = $filename;
        }//end of if

        $product->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.comps.index');
    } //end of update

    public function destroy(camp $product)
    {
        if ($product->finalreport != 'default.png') {

            Storage::disk('public_uploads')->delete('/camp/' . $product->finalreport);
        } //end of if

        if ($product->medicalreport != 'default.png') {

            Storage::disk('public_uploads')->delete('/camp/' . $product->medicalreport);
        } //end of if
        if ($product->staticreport != 'default.png') {

            Storage::disk('public_uploads')->delete('/camp/' . $product->staticreport);
        } //end of if
        $product->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.comps.index');
    } //end of destroy




     // Generate PDF
     public function createPDF() {
        // retreive all records from db
        $data = camp::all();
  
        // share data to view
        view()->share('employee',$data);
        $pdf = PDF::loadView('pdf_view', $data);
  
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }


      public function export() 
      {
              
          return Excel::download( new CompsExport, 'camps.xlsx');
      }
  
      public function import() 
      {
  
          Excel::import(new CampImport,request()->file('file'));
             
          return redirect()->back();
      }

}//end of controller
