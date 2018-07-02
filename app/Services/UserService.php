<?php
namespace App\Services;
use Prettus\Validator\Contracts\ValidatorInterface;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Prettus\Validator\Exceptions\ValidatorException;
use Illuminate\Database\QuerryException;
use Exception;

class UserService {
    private $repository;
    private $validator;

    public function __construct(UserRepository $repository,UserValidator $validator){
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function store($data){
        try{
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $usuario = $this->repository->create($data);
            return [
                'success'=> true,
                'message'=> "Usuario cadastrado",
                'data'=>$usuario,
            ];
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
    public function update(){}
    public function delete(){}    
    }