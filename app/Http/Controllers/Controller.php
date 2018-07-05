<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('index');
    }

    public function institucional(){
        return view('site.institucional');
    }

    public function grade(){
        return view('site.grade');
    }
    
    public function extensao(){
        return view('site.extensao');
    }
    
    public function eventos(){
        return view('site.eventos');
    }    
    
    public function loginAluno(){
        return view('site.aluno');
    }
    
    

}
