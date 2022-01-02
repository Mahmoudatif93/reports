<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Client;
use App\Order;
use App\Product;
use App\User;
use App\GoldPrice;
use App\clients_payments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WelcomeController extends Controller
{
    public function index()
    {


        
        return view('dashboard.welcome');
    } //end of index





}//end of controller
