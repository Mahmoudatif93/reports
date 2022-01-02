<?php

namespace App\Http\Controllers\Web;

use App\Category;
use App\Product;
use App\Cart;
use App\UserShopingCart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Session;
use App\GoldPrice;
use Goutte\Client;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
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
