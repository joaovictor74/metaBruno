<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;


class DashboardController extends Controller
{
    private $repository;
    private $validator;

    public function index(){
        return view('user.dashboard');
    }

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }
    public function auth(Request $request){
        $data= [
            'email' => $request->get('username'),
            'password' => $request->get('password')

        ];
        
        
            if(\Auth::attempt($data,false)){
                return redirect()->route('user.dashboard');
            }else{
                return back()->withInput();
            }
        
       
        

    }
    
}
