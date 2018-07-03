<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Database\QuerryException;
use Exception;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{   
    public function __construct(){
        $this->middleware('guest:admin');
    }
    public function showLoginForm(){
        return view('site.admin');
    }
    
    public function login(Request $request){
        $this->validate($request,[
            'email'=> 'required|email',
            'password' => 'required',
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],false)){
            return redirect()->intended(view('site.admin-in'));
        }else{
            return redirect()->back()->withInput();
        }


    }
    public function index(){
        return view('site.admin-in');
    }
       
        

}
    

