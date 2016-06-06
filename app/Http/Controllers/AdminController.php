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
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\Paginator;
use App\TimeZone;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Socialite;
use App\Continents;
use App\Country;
use App\State;
use App\City;
use App\Photos;
use App\Staff;
use App\Product;

class AdminController extends Controller {

    public function admin() {

        return view('welcome');
    }

    public function test() {

        $JsonSelect = DB::table('Logs')->select("*")->get();
        $Userss = json_decode(json_encode($JsonSelect), true);
        return view('AdminLTE/getpassword', compact('Userss'));
    }

    public function register() {
        return view('AdminPage/register');
    }

    public function registersubmit() {
        session()->regenerate();

        $Phone = Input::get('phone');
        $Email = Input::get('email');
        $AccountNumber = Input::get('AccountNumber');




        session(['Phone' => $Phone, 'email' => $Email, 'AccountNumber' => $AccountNumber]);

        $select = Session::all();
        $data['FullName'] = session::get('FullName');
        $data['Address'] = session::get('Address');
        $data['City'] = session::get('City');
        $data['State'] = session::get('State');
        $data['Phone'] = session::get('Phone');
        $data['email'] = session::get('email');
        $data['AccountNumber'] = session::get('AccountNumber');
//        print_r($data);
//$data=  json_encode($data);
//        print_r($data);

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
        $AccountNumber = Input::get('AccountNumber');
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

//    return $password;       
//print_r($password);
        $hashed_random_password = md5($password);
        // print_r($hashed_random_password);



        $insert = DB::table('AdminLTE')->insert(['FullName' => $FullName, 'Address' => $Address, 'City' => $City, 'State' => $State, 'Phone' => $Phone, 'email' => $Email, 'AccountNumber' => md5($AccountNumber), 'Password' => $hashed_random_password]);

        $User = DB::table('AdminLTE')->select("*")->get();
//        $User = Usedata::create(['FullName' => $FullName, 'Address' => $Address, 'City' => $City, 'State' => $State, 'Phone' => $Phone, 'email' => $Email,'Password'=>$Password]);
//print_r($user);
        if ($User) {
            $Result = "Succesfully inserted";
        } else {

            $Result = "<b style='color:red'>Somthing went Wrong</b>";
        }

// $hashed_random_password = (str_random(20));
        // print_r($password);
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
        session()->regenerate();
        $Email = Input::get('email');
        $Password = Input::get('password');
        $hashed = md5($Password);

        session([ 'email' => $Email]);
        $sessionemail['email'] = session::get('email');

//        print_r($hashed);
        $User = DB::table('AdminLTE')->select('Password')->where('email', "=", $Email)->get();
//        $User = json_decode(json_encode($User), true);
        foreach ($User as $users) {
            foreach ($users as $value) {

//       print_r($value);
                if ($value == $hashed) {





                    $user['useragent'] = $request->server('HTTP_USER_AGENT');
                    $input['ip'] = $request->ip();

//                    print_r($user);
//          print_r($input);



                    $u_agent = $_SERVER['HTTP_USER_AGENT'];
                    $bname = 'Unknown';
                    $platform = 'Unknown';
                    $version = "";


                    $ipAddress = $_SERVER['REMOTE_ADDR'];
                    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
                        $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
                    }



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
                    $yourbrowser = ['userAgent' => $u_agent, 'name' => $bname, 'version' => $version, 'platform' => $platform, 'pattern' => $pattern];
                    $jsonDetails = json_encode($yourbrowser);

                    DB::table('Logs')->insert(['BrowserDetails' => $jsonDetails, 'BrowserName' => $yourbrowser['name'], 'BrowserVersion' => $yourbrowser['version'], 'BrowserPlateform' => $yourbrowser['platform'], 'BrowserPattern' => $yourbrowser['pattern'], 'IPAddress' => $input['ip'], 'UserName' => $Email]);


                    $info = Session::get('Address');
//print_r($Userss);
                    return view('welcome', compact('info'));
                } else {
                    echo"<b style='color:red'>Somthing went Wrong Please check Your Login Details And Try Again.</b>";
                }
            }
        }
    }

    public function ChangePassword() {

        return view('AdminLTE/ChangePassword');
    }

    public function UpdatePassword() {
        session()->regenerate();

        $OldPassword = Input::get('oldpassword');
        $NewPassword = Input::get('newpassword');
        $ConformPassword = Input::get('conformpassword');
        $data['email'] = session::get('email');
        $hashed = md5($OldPassword);


        $User = DB::table('AdminLTE')->select('Password')->where('email', "=", $data)->get();
//        $User = json_decode(json_encode($User), true);
        foreach ($User as $users) {
            foreach ($users as $value) {

//print_r($UpdatePass);
//print_r($value);
//print_r($hashed);


                if ($value == $hashed) {

                    $Update = DB::table('AdminLTE')->where('email', "=", $data)->update(['Password' => md5($NewPassword)]);
                    $UpdatePass = DB::table('AdminLTE')->select('Password')->get();

                    $Result = "Succesfully inserted";
                } else {

                    $Result = "<b style='color:red'>Somthing went Wrong</b>";
                }
            }
        }

//        Mail::send('email/PasswordNew', array('password' => $NewPassword), function($message)use($data) {
//            $message->to($data, 'naveen')->subject('test mail');
//        });


        return view('AdminLTE/ChangePassword', compact('Result'));
    }

    public function Profile() {
        session()->regenerate();

        $Email = Input::get('email');


        $data['email'] = session::get('email');

//        print_r ($data);

        $Update = DB::table('AdminLTE')->select('*')->where('email', '=', $data['email'])->get();

        $Update = json_decode(json_encode($Update), true);
//        print_r($Update);


        return view('AdminLTE/Profile', compact('Update'));
    }

    public function ViewProfile() {
        session()->regenerate();

        $Email = Input::get('email');


        $data['email'] = session::get('email');

//        print_r ($data);

        $View = DB::table('AdminLTE')->select('*')->where('email', '=', $data['email'])->get();

        $Update = json_decode(json_encode($View), true);
        //print_r($Update);


        return view('AdminLTE/ViewProfile', compact('Update'));
    }

    public function UpdateProfile() {
        $FullName = Input::get('fullname');
        $Address = Input::get('textarea');
        $City = Input::get('city');
        $State = Input::get('state');
        $Phone = Input::get('phone');
        $Email = Input::get('email');
        $AccountNumber = Input::get('AccountNumber');

//        print_r ($data);

        $Updatet = DB::table('AdminLTE')->where('email', '=', $Email)->update(['FullName' => $FullName, 'Address' => $Address, 'City' => $City, 'State' => $State, 'Phone' => $Phone, 'email' => $Email, 'AccountNumber' => $AccountNumber]);

        $Changedata = DB::table('AdminLTE')->where('email', '=', $Email)->get();

        $Changedata = json_decode(json_encode($Changedata), true);
//        print_r($Changedata);
//        echo $Email;


        if ($Changedata) {
            $Result = "Succesfully inserted";
        } else {

            $Result = "<b style='color:red'>Somthing went Wrong</b>";
        }

        return view('AdminLTE/UpdateProfile', compact('Changedata', 'Result'));
    }

    public function Logout() {
        session()->regenerate();
        session(['Email' => null]);
        return Redirect::route('AdminLogin')
                        ->with('logout', 'sucessfully logged out');
    }

    public function FileUpload() {


        return view('AdminLTE/FileUpload');
    }

    public function ProgressBar() {

        $input = Input::file('myfile');

        $file_size = $input->getClientSize();
        $file_type = $input->getClientMimeType();
        $file_name = $input->getClientOriginalName();
        $input->move("Upload", $file_name);
        $uploads = DB::table('FileUpload')->insert(['FileName' => $file_name, 'FileType' => $file_type, 'FileSize' => $file_size]);
        $upload = DB::table('FileUpload')->where('FileName', '=', $file_name)->get();
        $upload = json_decode(json_encode($upload), true);
        if ($upload) {
            $Result = "Succesfully updated";
        } else {

            $Result = "<b style='color:red'>Somthing went Wrong</b>";
        }

        echo $file_size;



        return view('AdminLTE/FileUpload', compact('Result'));
    }

    public function DataTablePage() {

        $upload = DB::table('FileUpload')->select("*")->get();
        $upload = json_decode(json_encode($upload), true);


        // print_r($upload);    



        return view('AdminLTE/DataTable', compact('upload'));
    }

    public function forgotpassword() {

        return view('AdminLTE/forgotpassword');
    }

    public function sentpassword() {


        $Email = Input::get('email');

//        print_r($hashed);
        DB::table('AdminLTE')->select('Password')->where('email', '=', $Email)->get();
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

//    return $password;       
        print_r($password);
        $hashed_random_password = md5($password);
        // print_r($hashed_random_password);

        $Update = DB::table('AdminLTE')->where('email', '=', $Email)->update(['Password' => $hashed_random_password]);




        $Update = json_decode(json_encode($Update), true);


        Mail::send('email/PasswordNew', array('value' => $password), function($message)use($Email) {
            $message->to($Email, 'naveen')->subject('test mail');
        });

        return view('AdminLTE/index');
    }

    public function TimeZone() {


        $tzlist = timezone_abbreviations_list();
        $tzlist = json_decode(json_encode($tzlist), true);
        //print_r($tzlist);
        foreach ($tzlist as $value) {
            foreach ($value as $val) {

                $offset = $val['offset'];
                $name = $val['timezone_id'];


                DB::table('TimeZone')->insert(['Name' => $name, 'Offset' => $offset]);
                //$User = DB::table('TimeZone')->select("*")->get();
                //$User = json_decode(json_encode($User), true);
// print_r($User);

                return view('AdminLTE/TimeZone');


//print_r(timezone_abbreviations_list());
//
//
//        $User = DB::table('TimeZone')->select("*")->get();
//        print_r($User);
//return view('AdminLTE/TimeZone',compact('User'));
            }
        }
    }

    public function excelFormatTimeZone() {
        $users = DB::table('TimeZone')->select('*')->get();
        $users = json_decode(json_encode($users), true);
        Excel::create('TimeZone', function($excel) use($users) {
            $excel->sheet('Sheet 1', function($sheet) use($users) {
                $sheet->fromArray($users);
            });
        })->export('xls');

        $user = DB::table('AdminLTE')->select('*')->get();
        $user = json_decode(json_encode($user), true);
        Excel::create('AdminLTE', function($excel) use($user) {
            $excel->sheet('Sheet 1', function($sheet) use($user) {
                $sheet->fromArray($user);
            });
        })->export('xls');
    }

    public function excelFormatAdminLTE() {

        $user = DB::table('AdminLTE')->select('*')->get();
        $user = json_decode(json_encode($user), true);
        Excel::create('AdminLTE', function($excel) use($user) {
            $excel->sheet('Sheet 1', function($sheet) use($user) {
                $sheet->fromArray($user);
            });
        })->export('xls');
    }

    public function excelFormatLogs() {

        $user = DB::table('Logs')->select('*')->get();
        $user = json_decode(json_encode($user), true);
        Excel::create('Logs', function($excel) use($user) {
            $excel->sheet('Sheet 1', function($sheet) use($user) {
                $sheet->fromArray($user);
            });
        })->export('xls');
    }

    public function excelFormatFileUpload() {

        $user = DB::table('FileUpload')->select('*')->get();
        $user = json_decode(json_encode($user), true);
        Excel::create('FileUpload', function($excel) use($user) {
            $excel->sheet('Sheet 1', function($sheet) use($user) {
                $sheet->fromArray($user);
            });
        })->export('xls');
    }

    public function pdfFormatTimeZone() {
        $user = DB::table('TimeZone')->select('*')->get();
        $user = json_decode(json_encode($user), true);
        $pdf = PDF::loadView('pdf.TimeZone', compact('user'));
        return $pdf->stream('TimeZone.pdf');
    }

    public function pdfFormatAdminLTE() {

        $user = DB::table('AdminLTE')->select('*')->get();
        $user = json_decode(json_encode($user), true);
        $pdf = PDF::loadView('pdf.AdminLte', compact('user'));
        return $pdf->stream('AdminLte.pdf');
    }

    public function pdfFormatLogs() {

        $user = DB::table('Logs')->select('*')->get();
        $user = json_decode(json_encode($user), true);
        $pdf = PDF::loadView('pdf.Logs', compact('user'));
        return $pdf->stream('Logs.pdf');
    }

    public function pdfFormatFileUpload() {

        $user = DB::table('FileUpload')->select('*')->get();
        $user = json_decode(json_encode($user), true);

        $pdf = PDF::loadView('pdf.FileUpload', compact('user'));
        return $pdf->stream('FileUpload.pdf');
    }

    public function dataTimeZone($data) {


        //echo $data;


        $User = DB::table('TimeZone')->select("*")->where('Id', '=', $data)->get();
        $User = json_decode(json_encode($User), true);
        return view('AdminLTE/dataTimeZone', compact('User'));
    }

    public function dataTimeZoneDelete($data) {


        //echo $data;


        DB::table('TimeZone')->where('Id', '=', $data)->delete();
        $User = DB::table('TimeZone')->select("*")->where('Id', '=', $data)->get();

        $User = json_decode(json_encode($User), true);
        return view('AdminLTE/dataTimeZoneDelete', compact('User'));
    }

    public function SaveRows() {
        $ID = Input::get('Id');
        $Name = Input::get('Name');
        $Offset = Input::get('Offset');



        DB::table('TimeZone')->where('Id', '=', $ID)->update(['Name' => $Name, 'Offset' => $Offset]);

        $UserUpdate = DB::table('TimeZone')->select("*")->where('Id', '=', $ID)->get();
        $UserUpdate = json_decode(json_encode($UserUpdate), true);
        //print_r($User);
        return view('AdminLTE/RowUpdate', compact('UserUpdate'));
    }

    public function ViewdataTimeZone($data) {

        $User = DB::table('TimeZone')->where('Id', '=', $data)->select('*')->get();


        $User = json_decode(json_encode($User), true);
// print_r($User);

        return view('AdminLTE/ViewdataTimeZone', compact('User'));
    }

    public function redirectToProvider() {

        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback(Request $request) {
        session()->regenerate();

        $user = Socialite::driver('facebook')->user();

        $token = $user->token;
        $Id = $user->getId();
        $Name = $user->getName();
        $Email = $user->getEmail();
        session(['email' => $Email]);
//echo $data['email'];
        //echo $data;
        $table = DB::table('AdminLTE')->select('email')->where('email', '=', $Email)->count();
        //$tablevalue = json_decode(json_encode($table), true);
        //print_r($table);
        //echo $table;
//echo $datatable,"<br><br>";
        if ($table == 0) {

            DB::table('AdminLTE')->where('email', "=", $Email)->insert(['FullName' => $Name, 'Socialite_ID' => $Id, 'email' => $Email]);
            $Insert = DB::table('AdminLTE')->where('email', '=', $Email)->get();
            $Insert = json_decode(json_encode($Insert), true);
            //print_r($Insert);
        } else {

            DB::table('AdminLTE')->where('email', "=", $Email)->update(['FullName' => $Name, 'Socialite_ID' => $Id]);
            $Update = DB::table('AdminLTE')->where('email', '=', $Email)->get();
            $Update = json_decode(json_encode($Update), true);
//print_r($Update);
        }
        $user['useragent'] = $request->server('HTTP_USER_AGENT');
        $input['ip'] = $request->ip();

        // print_r($user);
        // print_r($input);
        $user['useragent'] = $request->server('HTTP_USER_AGENT');
        $input['ip'] = $request->ip();

//                    print_r($user);
//          print_r($input);

        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version = "";


        $ipAddress = $_SERVER['REMOTE_ADDR'];
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
        }

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
        $yourbrowser = ['userAgent' => $u_agent, 'name' => $bname, 'version' => $version, 'platform' => $platform, 'pattern' => $pattern];
        $jsonDetails = json_encode($yourbrowser);

        DB::table('Logs')->insert(['BrowserDetails' => $jsonDetails, 'BrowserName' => $yourbrowser['name'], 'BrowserVersion' => $yourbrowser['version'], 'BrowserPlateform' => $yourbrowser['platform'], 'BrowserPattern' => $yourbrowser['pattern'], 'IPAddress' => $input['ip'], 'UserName' => $Email]);

        return view('welcome');
    }

    public function redirectToLinkedIn() {

        return Socialite::driver('linkedin')->redirect();
    }

    public function LinkedInCallback(Request $request) {
        session()->regenerate();

        $user = Socialite::driver('linkedin')->user();


        $token = $user->token;
        $Id = $user->getid();
        $Name = $user->getName();
        $Email = $user->getEmail();
        session(['email' => $Email]);
//        echo "<pre>";
//        print_r($Id);
//         echo "</pre>";
//         exit;
//        echo $Name;
//        echo $token."<br>";
//        echo $Id;

        $table = DB::table('AdminLTE')->select('email')->where('email', '=', $Email)->count();
//        //$tablevalue = json_decode(json_encode($table), true);
//        //print_r($table);
//        //echo $table;
////echo $datatable,"<br><br>";
        if ($table == 0) {

            DB::table('AdminLTE')->where('email', "=", $Email)->insert(['FullName' => $Name, 'Socialite_ID' => $Id, 'email' => $Email]);
            $Insert = DB::table('AdminLTE')->where('email', '=', $Email)->get();
            $Insert = json_decode(json_encode($Insert), true);
            //print_r($Insert);
        } else {

            DB::table('AdminLTE')->where('email', "=", $Email)->update(['FullName' => $Name, 'Socialite_ID' => $Id]);
            $Update = DB::table('AdminLTE')->where('email', '=', $Email)->get();
            $Update = json_decode(json_encode($Update), true);
//print_r($Update);
        }

        $user['useragent'] = $request->server('HTTP_USER_AGENT');
        $input['ip'] = $request->ip();

        // print_r($user);
        // print_r($input);
        $user['useragent'] = $request->server('HTTP_USER_AGENT');
        $input['ip'] = $request->ip();

//                    print_r($user);
//          print_r($input);



        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version = "";


        $ipAddress = $_SERVER['REMOTE_ADDR'];
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
        }



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
        $yourbrowser = ['userAgent' => $u_agent, 'name' => $bname, 'version' => $version, 'platform' => $platform, 'pattern' => $pattern];
        $jsonDetails = json_encode($yourbrowser);

        DB::table('Logs')->insert(['BrowserDetails' => $jsonDetails, 'BrowserName' => $yourbrowser['name'], 'BrowserVersion' => $yourbrowser['version'], 'BrowserPlateform' => $yourbrowser['platform'], 'BrowserPattern' => $yourbrowser['pattern'], 'IPAddress' => $input['ip'], 'UserName' => $Email]);


        return view('welcome');
    }

    public function redirectToGoogle() {

        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(Request $request) {
        session()->regenerate();

        $user = Socialite::driver('google')->user();


        $token = $user->token;
        $Id = $user->getId();
        $Name = $user->getName();
        $Email = $user->getEmail();
        session(['email' => $Email]);
//         echo "<pre>";
//         print_r($user);
//         echo "</pre>";
//         exit;
//        echo $Name;
//        echo $token."<br>";
//        echo $Id;

        $table = DB::table('AdminLTE')->select('email')->where('email', '=', $Email)->count();
//        //$tablevalue = json_decode(json_encode($table), true);
//        //print_r($table);
//        //echo $table;
////echo $datatable,"<br><br>";
        if ($table == 0) {

            DB::table('AdminLTE')->where('email', "=", $Email)->insert(['FullName' => $Name, 'Socialite_ID' => $Id, 'email' => $Email]);
            $Insert = DB::table('AdminLTE')->where('email', '=', $Email)->get();
            $Insert = json_decode(json_encode($Insert), true);
            //print_r($Insert);
        } else {

            DB::table('AdminLTE')->where('email', "=", $Email)->update(['FullName' => $Name, 'Socialite_ID' => $Id]);
            $Update = DB::table('AdminLTE')->where('email', '=', $Email)->get();
            $Update = json_decode(json_encode($Update), true);
//print_r($Update);
        }

        $user['useragent'] = $request->server('HTTP_USER_AGENT');
        $input['ip'] = $request->ip();

        // print_r($user);
        // print_r($input);
        $user['useragent'] = $request->server('HTTP_USER_AGENT');
        $input['ip'] = $request->ip();

//                    print_r($user);
//          print_r($input);



        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version = "";


        $ipAddress = $_SERVER['REMOTE_ADDR'];
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
        }



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
        $yourbrowser = ['userAgent' => $u_agent, 'name' => $bname, 'version' => $version, 'platform' => $platform, 'pattern' => $pattern];
        $jsonDetails = json_encode($yourbrowser);

        DB::table('Logs')->insert(['BrowserDetails' => $jsonDetails, 'BrowserName' => $yourbrowser['name'], 'BrowserVersion' => $yourbrowser['version'], 'BrowserPlateform' => $yourbrowser['platform'], 'BrowserPattern' => $yourbrowser['pattern'], 'IPAddress' => $input['ip'], 'UserName' => $Email]);


        return view('welcome');
    }

//    practice ------------------DataTAbles-------------------------------
//    ---------------------------------------------------------------------

    public function testdatatable() {
        return view('AdminLTE/testdatatable');
    }

    public function ajaxcall(Request $request) {
        $length = $request->input('length');
        $start = $request->input('start');
        $search = $request->input('search');
        $order = $request->input('order');
        $column = $request->input('columns');
        // if($search['value']=="" && $order[0]['dir']==""){
//        $ajax = DB::table('TimeZone')->select('*')->limit($lenght)->offset($start)->get();
//        $ajax = json_encode($ajax);
//        $count = DB::table('TimeZone')->count();
//        echo "{\"recordsTotal\":" . $count . ",\"recordsFiltered\":" . $count . ", \"data\":" . $ajax . "}";
//      // echo "{\"data\":".$ajax."}";
        if ($search['value'] == "" && $order[0]['dir'] == "") {

            //$data = Country::limit($length)->offset($offset)->get();
            $join = DB::table('TimeZone')->select('TimeZone.Id', 'TimeZone.Name', 'TimeZone.Offset', 'TimeZone.Created')
                            ->orderBy("TimeZone." . "$data", "$asc")
                            ->limit($length)->offset($start)->get();
            $data = json_encode($join);
            $count = DB::table('TimeZone')->count();
            echo "{\"recordsTotal\":" . $count . ",\"recordsFiltered\":" . $count . ", \"data\":" . $data . "}";
        }
        if ($order[0]['dir'] != "" && $search['value'] == "") {
            $data = $column[$order[0]['column']]['data'];
            $asc = $order[0]['dir'];
            $join = DB::table('TimeZone')->select('TimeZone.Id', 'TimeZone.Name', 'TimeZone.Offset', 'TimeZone.Created')
                            ->orderBy("TimeZone." . "$data", "$asc")
                            ->limit($length)->offset($start)->get();

            $data = json_encode($join);
            $count = DB::table('TimeZone')->count();
            echo "{\"recordsTotal\":" . $count . ",\"recordsFiltered\":" . $count . ", \"data\":" . $data . "}";
        } else {
            $data = $column[$order[0]['column']]['data'];
            $asc = $order[0]['dir'];
            $join = DB::table('TimeZone')->select('TimeZone.Id', 'TimeZone.Name', 'TimeZone.Offset', 'TimeZone.Created')
                    ->orderBy("TimeZone." . "$data", "$asc")
                    ->limit($length)->offset($start)->where('TimeZone.Id', 'like', $search['value'] . '%')
                    ->orwhere('TimeZone.Name', 'like', $search['value'] . '%')
                    ->orwhere('TimeZone.Offset', 'like', $search['value'] . '%')
                    ->orwhere('TimeZone.Created', 'like', $search['value'] . '%')
                    ->orderBy("TimeZone." . "$data", "$asc")
                    ->get();

            $data = json_encode($join);
            $count = DB::table('TimeZone')->count();
            echo "{\"recordsTotal\":" . $count . ",\"recordsFiltered\":" . $count . ", \"data\":" . $data . "}";
        }
    }

    public function countries() {
        $CountryData = Country::find(1)->first()->Continent;
        $CountryData2 = Continents::find(1)->first()->Country;
        //echo $CountryData2;

        echo "Data from Continent To Country is =>  " . "<B>" . $CountryData['Name'] . "</B>" . "<br>";

        foreach ($CountryData2 as $value => $keys) {

            echo "<p><u>Data from Country To Continent </u></p> :-" . $keys['ID'] . "  " . "<B>" . $keys['Name'] . "</B>" . "<br>";
        }

//        dd($countryData);
    }

    public function State() {
        $StateData = State::find(1)->first()->Country;
        $StateData2 = Country::find(1)->first()->State;
        echo "Data from State To Country Using BelongsTo =>  " . "<B>" . $StateData['Name'] . "</B>" . "<br>";

        foreach ($StateData2 as $value => $keys) {

            echo "<p><u>Data from Country To State Using HasMany</u></p> :-" . $keys['ID'] . "  " . "<B>" . $keys['Name'] . "</B>" . "<br>";
        }
        //dd($StateData);
    }

    public function City() {
        $CityData = State::find(1)->first()->City;
        $CityData2 = City::find(1)->first()->State;
//      $CityData = json_encode($CityData);
        // dd($CityData);
        foreach ($CityData as $value => $key) {

            echo "<p><u>Data from State To City </u></p> :-" . $key['ID'] . "  " . "<B>" . $key['Name'] . "</B>" . "<br>";
        }


        echo "Data from City To State is =>  " . "<B>" . $CityData2['Name'] . "</B>" . "<br>";
    }

    public function Continents() {
        $Statepost = Continents::find(1)->first()->StateThrough;
        // dd($Statepost);
        foreach ($Statepost as $value => $key) {

            echo "<p><u>Using HasManyThrough </u></p> :-" . $key['ID'] . "  " . "<B>" . $key['Name'] . "</B>" . "<br>";
        }
    }

    public function polymorphic() {
        $staff = Staff::find(1);
         $product = Product::find(1);
         $photo = Photos::find(1);
       echo $product."<br><br>";
        //  dd($staff);
       echo $photo."<br><br>";
        echo $staff;
//        foreach ($staff->photos as $photo=>$key) {
//           echo "<p><u>Using HasManyThrough </u></p> :-" . $key['Id'] . "  " . "<B>" . $key['Name'] . "</B>" . "<br>";
//        }
    }



}
