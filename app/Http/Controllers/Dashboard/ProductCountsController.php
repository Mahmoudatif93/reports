<?php

namespace App\Http\Controllers\Dashboard;

use App\Product;
use App\examslabs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class ProductCountsController extends Controller
{
    public function index(Request $request)
    {
      

        $products = examslabs::distinct('examName')->when($request->search, function ($q) use ($request) {

            return $q->where('examName','like', '%' . $request->search . '%');
        })->distinct('examName')->groupBy('examName')->paginate(8);

       
        return view('dashboard.labsCounts.index', compact( 'products'));
    } //end of index

    public function create()
    {
  
        
        return view('dashboard.products.create');
    } //end of create

    public function store(Request $request)
    {

    

        $rules = [
            'client_name' => 'required',
            'client_number' => 'required',
            'examName' => 'required'



        ];

        $request->validate($rules);

        $request_data = $request->all();
        $request_data['examName'] = json_encode($request->examName);

        if ($request->file) {
            $file = $request->file('file');
            $filename = time() . '.' . $request->file('file')->extension();
            $filePath = public_path('uploads/labs/');
            $file->move($filePath, $filename);
          
            $request_data['file'] = $filename;
        }//end of if

        Product::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.products.index');
    } //end of store

    public function edit($id)
    {
   
         $product=Product::where('id',$id)->first();
 
        return view('dashboard.products.edit', compact( 'product'));
    } //end of edit

    public function update(Request $request, Product $product)
    {
        $rules = [
            'client_name' => 'required',
            'client_number' => 'required',
            'examName' => 'required'
        ];


        $request->validate($rules);

        $request_data = $request->all();
        $request_data['examName'] = json_encode($request->examName);
        if ($request->file) {
            $file = $request->file('file');
            $filename = time() . '.' . $request->file('file')->extension();
            $filePath = public_path('uploads/labs/');
            $file->move($filePath, $filename);
          
            $request_data['file'] = $filename;
        }

        $product->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.products.index');
    } //end of update

    public function destroy(Product $product)
    {
        if ($product->file != 'default.png') {

            Storage::disk('public_uploads')->delete('/labs/' . $product->file);
        } //end of if

        $product->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.products.index');
    } //end of destroy




}//end of controller
