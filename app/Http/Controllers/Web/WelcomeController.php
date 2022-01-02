<?php

namespace App\Http\Controllers\Web;


use App\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;

use App\Cart;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use Illuminate\Console\Scheduling\Schedule;
class WelcomeController extends Controller
{
    public function index(Request $request)
    {




        if(isset($request->search)){
            $products = Product::when($request->search, function ($q) use ($request) {

                return $q->where('client_number',$request->search);
            })->get();
        }else{
            $products = '';
        }
      
       
        return view('web.products.ourproducts', compact('products'));
    } //end of index


   

}//end of controller
