<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Contacts;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Password_resets;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use App;
use App\GoldPrice;
use App\UserShopingCart;
class ContactUsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //  protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function index(Request $request)
    {
        $title = 'Contact Us';
        
        return view('web.contact_us.contact_us', compact('title'));
    } //end of inde


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */


    public function store(Request $request)
    {

        // dd($request);
        $rules = [
            'name' => 'required',
            'examName' => 'required',
            'phone' => 'required',
            'examDetails' => 'required',
         
        ];
        $request->validate($rules);
        $request_data = $request->all();


        Contacts::create([
            'name' => $request_data['name'],
            'examName' => $request_data['examName'],
            'phone' => $request_data['phone'],
            'examDetails' => $request_data['examDetails'],
        ]);
        session()->flash('success', "Your Message is sent Now");
        return redirect()->route('fakka.contactus.index');
    }

  



    
}
