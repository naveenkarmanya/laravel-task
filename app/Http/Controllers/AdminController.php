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
use App\Usedata;

class AdminController extends Controller {

    public function admin() {
        return view('welcome');
    }

    public function register() {
        return view('AdminPage/register');
    }

    public function registersubmit() {
        session()->regenerate();

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


        return view('AdminPage/login');
    }

    public function loginsubmit() {

        $FullName = Input::get('fullname');
        $Address = Input::get('textarea');
        $City = Input::get('city');
        $State = Input::get('state');
        $Phone = Input::get('phone');
        $Email = Input::get('email');
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
        $hashed_random_password = md5($password);
        print_r($hashed_random_password);



        $insert = DB::table('AdminLTE')->insert(['FullName' => $FullName, 'Address' => $Address, 'City' => $City, 'State' => $State, 'Phone' => $Phone, 'email' => $Email, 'Password' => $hashed_random_password]);

        $User = DB::table('AdminLTE')->select("*")->get();
//        $User = Usedata::create(['FullName' => $FullName, 'Address' => $Address, 'City' => $City, 'State' => $State, 'Phone' => $Phone, 'email' => $Email,'Password'=>$Password]);
//print_r($user);
        if ($User) {
            $Result = "Succesfully inserted";
        } else {

            $Result = "<b style='color:red'>Somthing went Wrong</b>";
        }

// $hashed_random_password = (str_random(20));
//      print_r($password);
//        print_r($password);


        Mail::send('email/testpassword', array('password' => $password), function($message)use($Email) {
            $message->to($Email, 'naveen')->subject('test mail');
        });




        return view('AdminLTE/index', compact('Result'));
    }

    public function AdminLogin() {

        return view('AdminLTE/index');
    }

    public function AdminData(Request $request) {
        $Email = Input::get('email');
        $Password = Input::get('password');
        $hashed = md5($Password);
//        print_r($hashed);
        $User = DB::table('AdminLTE')->select('Password')->where('email', "=", $Email)->get();
        $User = json_decode(json_encode($User), true);
        foreach ($User as $users) {
            foreach ($users as $value) {

//       print_r($value);
                if ($value == $hashed) {



                    $ipAddress = $_SERVER['REMOTE_ADDR'];
                    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
                        $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
                    }

                    $user['useragent'] = $request->server('HTTP_USER_AGENT');
                    $input['ip'] = $request->ip();

                    print_r($user);
                    print_r($input);



                    $u_agent = $_SERVER['HTTP_USER_AGENT'];
                    $bname = 'Unknown';
                    $platform = 'Unknown';
                    $version = "";


                    $ipAddress = $_SERVER['REMOTE_ADDR'];
                    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
                        $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
                    }

                    $user['useragent'] = $request->server('HTTP_USER_AGENT');
                    $input['ip'] = $request->ip();

                    print_r($user);
                    print_r($input);




                    //First get the platform?
                    if (preg_match('/linux/i', $u_agent)) {
                        $platform = 'linux';
                    } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
                        $platform = 'mac';
                    } elseif (preg_match('/windows|win32/i', $u_agent)) {
                        $platform = 'windows';
                    }

                    // Next get the name of the useragent yes seperately and for good reason
                    if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
                        $bname = 'Internet Explorer';
                        $ub = "MSIE";
                    } elseif (preg_match('/Firefox/i', $u_agent)) {
                        $bname = 'Mozilla Firefox';
                        $ub = "Firefox";
                    } elseif (preg_match('/Chrome/i', $u_agent)) {
                        $bname = 'Google Chrome';
                        $ub = "Chrome";
                    } elseif (preg_match('/Safari/i', $u_agent)) {
                        $bname = 'Apple Safari';
                        $ub = "Safari";
                    } elseif (preg_match('/Opera/i', $u_agent)) {
                        $bname = 'Opera';
                        $ub = "Opera";
                    } elseif (preg_match('/Netscape/i', $u_agent)) {
                        $bname = 'Netscape';
                        $ub = "Netscape";
                    }

                    // finally get the correct version number
                    $known = array('Version', $ub, 'other');
                    $pattern = '#(?<browser>' . join('|', $known) .
                            ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
                    if (!preg_match_all($pattern, $u_agent, $matches)) {
                        // we have no matching number just continue
                    }

                    // see how many we have
                    $i = count($matches['browser']);
                    if ($i != 1) {
                        //we will have two since we are not using 'other' argument yet
                        //see if version is before or after the name
                        if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                            $version = $matches['version'][0];
                        } else {
                            $version = $matches['version'][1];
                        }
                    } else {
                        $version = $matches['version'][0];
                    }

                    // check if we have a number
                    if ($version == null || $version == "") {
                        $version = "?";
                    }

                    return array(
                        'userAgent' => $u_agent,
                        'name' => $bname,
                        'version' => $version,
                        'platform' => $platform,
                        'pattern' => $pattern
                    );


// now try it
                    $ua = getBrowser();
                    $yourbrowser = "Your browser:<br> " . $ua['name'] . " <br>" . $ua['version'] . " on " . $ua['platform'] . " reports: <br >" . $ua['userAgent'];
                    print_r($yourbrowser);



//        return view('AdminLTE/index');
                } else {
                    echo "errorjhgkh g jhg jhg hjg k gkj g";
                }
            }
        }
    }

}
