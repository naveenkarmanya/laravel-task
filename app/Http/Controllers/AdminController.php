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



class AdminController extends Controller
{
    
    public function admin()
    {
        return view('welcome');
    }
    
    public function register()
    {
        return view('AdminPage/register');
    }
    
    public function registersubmit()
    {
         session()->regenerate();
//        $FullName=Input::get('fullname');
//        $Address=Input::get('textarea');
//        $City=Input::get('city');
//        $State=Input::get('state');
        $Phone=Input::get('phone');
        $Email=Input::get('email');
        
        
      
        
   session(['Phone'=>$Phone,'email'=>$Email]);
       
       $select = Session::all();
$data['FullName']=session::get('FullName');
$data['Address']=session::get('Address');
$data['City']=session::get('City');
$data['State']=session::get('State');
$data['Phone']=session::get('Phone');
$data['email']=session::get('email');
//print_r ($data);
        
         return view('AdminLTE/registersubmit',compact('data'));
       
    }
    
    
    
    
    
    
    
    public function login()
    {
         session()->regenerate();
        $FullName=Input::get('fullname');
        $Address=Input::get('textarea');
        $City=Input::get('city');
        $State=Input::get('state');
         session(['FullName' => $FullName, 'Address' => $Address,'City'=>$City,'State'=>$State]);
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
    
    public function loginsubmit()
    {
//        session()->regenerate();
//        $FullName=Input::get('fullname');
//        $Address=Input::get('textarea');
//        $City=Input::get('city');
//        $State=Input::get('state');
//        $Phone=Input::get('phone');
//        $Email=Input::get('email');
//        
//        
//      
//        
//   session(['FullName' => $FullName, 'Address' => $Address,'City'=>$City,'State'=>$State,'Phone'=>$Phone,'email'=>$Email]);
//       
//       $select = Session::all();
//$data['FullName']=session::get('FullName');
//$data['Address']=session::get('Address');
//$data['City']=session::get('City');
//$data['State']=session::get('State');
//$data['Phone']=session::get('Phone');
//$data['email']=session::get('email');
//print_r ($data);
        
        
//         return view('AdminLTE/index',compact('User'));
       
    }
    
    public function getpassword(){
    
    
    Mail::send('emails.auth.test',array('name'=>'naveen'), function($message){
        $message->to('pawankumar.s@karmanya.co.in','naveen')->subject('test mail');
    });
    
    return view('AdminLTE/getpassword');
    
    
    
    }
    
    
    
    
}
    
 