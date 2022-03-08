<?php

namespace app\models;
namespace app\core;


class RegisterModel extends Model
{
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $passwordConfirm;

    public function rules(){
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIl],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'confirmPassword' => [self::RULE_REQUIRED, self::RULE_MATCH, 'match' => 'password']
        ];
    }
}