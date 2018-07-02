<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class UserValidator.
 *
 * @package namespace App\Validators;
 */
class UserValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
        'matricula' => 'required|unique:users,matricula',
        'name'      => 'required',
        'email'     => 'required|unique:users,email',
        'password'  => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];
}
