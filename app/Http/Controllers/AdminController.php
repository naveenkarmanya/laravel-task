<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Validator;
use Illuminate\Http\Request;

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
    
    public function login(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
          if ($validator->fails()) {
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }
        
    }
    
    

}
