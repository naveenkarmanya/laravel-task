<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller {

    public function admin() {
        return view('welcome');
    }

    public function register() {
        return view('AdminPage/register');
    }

    public function registersubmit() {
        session()->regenerate();
//        $FullName=Input::get('fullname');
//        $Address=Input::get('textarea');
//        $City=Input::get('city');
//        $State=Input::get('state');
        $Phone = Input::get('phone');
        $Email = Input::get('email');




        session(['Phone' => $Phone, 'email' => $Email]);

        $select = Session::all();
        $data['FullName'] = session::get('FullName');
        $data['Address'] = session::get('Address');
        $data['City'] = session::get('City');
        $data['State'] = session::get('State');
        $data['Phone'] = session::get('Phone');
        $data['email'] = session::get('email');
//print_r ($data);
//$data=  json_encode($data);

        return view('AdminLTE/registersubmit', compact('data'));
    }

    public function login() {
        session()->regenerate();
        $FullName = Input::get('fullname');
        $Address = Input::get('textarea');
        $City = Input::get('city');
        $State = Input::get('state');
        session(['FullName' => $FullName, 'Address' => $Address, 'City' => $City, 'State' => $State]);
//            
//              $select = Session::all();
//$data['FullName']=session::get('FullName');
//$data['Address']=session::get('Address');
//$data['City']=session::get('City');
//$data['State']=session::get('State');
//               $validator = Validator::make($request->all(), [
//            'email' => 'required|unique:posts|max:255',
//            'password' => 'required',
//        ]);
//
//        if ($validator->fails()) {
//            return redirect('login')
//                        ->withErrors($validator)
//                        ->withInput();
//        }
//
//        // Store the blog post...
        return view('AdminPage/login');
    }

    public function loginsubmit() {

        $FullName = Input::get('fullname');
        $Address = Input::get('textarea');
        $City = Input::get('city');
        $State = Input::get('state');
        $Phone = Input::get('phone');
        $Email = Input::get('email');


        $insert = DB::table('AdminLTE')->insert(['FullName' => $FullName, 'Address' => $Address, 'City' => $City, 'State' => $State, 'Phone' => $Phone, 'email' => $Email]);

        $User = DB::table('AdminLTE')->select("*")->get();
//print_r($user);
        if ($User) {
            $Result = "Succesfully inserted";
        } else {

            $Result = "<b style='color:red'>Somthing went Wrong</b>";
        }

// $hashed_random_password = (str_random(20));




        $_len = 20;
        $type = 'alpha_numeric';

        $_alphaSmall = 'abcdefghijklmnopqrstuvwxyz';            // small letters
        $_alphaCaps = strtoupper($_alphaSmall);                // CAPITAL LETTERS
        $_numerics = '1234567890';                            // numerics
        $_specialChars = '`~!@#$%^&*()-_=+]}[{;:,<.>/?\'"\|';   // Special Characters
        $unixTimeStamp = time();

        $_container = $_alphaSmall . $_alphaCaps . $unixTimeStamp . $_numerics . $_specialChars;   // Contains all characters
        $password = '';         // will contain the desired pass

        for ($i = 0; $i < $_len; $i++) {                                 // Loop till the length mentioned
            $_rand = rand(0, strlen($_container) - 1);                  // Get Randomized Length
            $password .= substr($_container, $_rand, 1);                // returns part of the string [ high tensile strength ;) ] 
        }

//    return $password;       // Returns the generated Pass
//print_r($password);
        $hashed_random_password = hash("sha256", $password);
        print_r($hashed_random_password);


        Mail::send('email/testpassword', array('password' => $password), function($message) {
            $message->to('pawankumar.s@karmanya.co.in', 'naveen')->subject('test mail');
        });




        return view('AdminPage/register', compact('Result'));
    }

    public function getpassword() {


        Mail::send('emails.auth.test', array('name' => 'naveen'), function($message) {
            $message->to('pawankumar.s@karmanya.co.in', 'naveen')->subject('test mail');
        });

        return view('AdminLTE/getpassword');
    }

}
