<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Prettus\Validator\Exceptions\ValidatorException;
use Illuminate\Database\QuerryException;
use Exception;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    private $repository;
    private $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->middleware('autorizador:aluno');
       
    }

    public function authAluno(Request $request){
        
        $data= [
            'matricula' => $request->get('username'),
            'password' => $request->get('password')

        ];
        
        
            try{
                if(Auth::attempt($data,false))
                    return redirect()->view('site.aluno-in');
                else
                    return redirect()->intendend(route('aluno.login')->withInput());
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
            return view('site.aluno-in');        } 
    }
    

