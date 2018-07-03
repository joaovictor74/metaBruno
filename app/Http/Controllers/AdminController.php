<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AdminRepository;
use App\Validators\AdminValidator;
use Prettus\Validator\Exceptions\ValidatorException;
use Illuminate\Database\QuerryException;
use Exception;
use App\Http\Controllers\Controller;
use Auth;


class AdminController extends Controller
{   
    private $repository;
    private $validator;

    public function __construct(AdminRepository $repository, AdminValidator $validator){
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->middleware('auth');
    }
    public function showLoginForm(){
        $this->middleware('guest');
        return view('site.admin');
    }
    
    public function login(Request $request){
        
        $data= [
            'email' => $request->get('username'),
            'password' => $request->get('password')

        ];
        try{
            if(Auth::attempt($data,false))
                return redirect()->intended(route('site.admin-in'));
            else
                return $data;
        }
        catch(Exception $e){
            switch(get_class($e)){
                case QuerryException::class : return['success'=>false,'message'=> $e->getMessage()];   
                case ValidatorException::class : return['success'=>false,'message'=> $e->getMessageBag()];   
                case Exception::class : return['success'=>false,'message'=> $e->getMessage()];
                default : return['success'=>false,'message'=> get_class($e)];   
            }
        } 


    }
    public function index(){
        $this->middleware('auth:admin');        
        return view('site.admin-in');
    }
       
        

}
    

