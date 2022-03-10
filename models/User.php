<?php

namespace app\models;
namespace app\core;


class User extends DbModel
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;


    public $firstname = '';
    public $lastname = '';
    public $email = '';
    public $status = self::STATUS_INACTIVE;
    public $password = '';
    public $passwordConfirm = '';

    public function tableName(): string
    {
        return 'user';
    }

    public function save(){
        $this->status = self::STATUS_DELETED;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }

    public function rules(){
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIl, [self::RULE_UNIQUE, 'class']],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'confirmPassword' => [self::RULE_REQUIRED, self::RULE_MATCH, 'match' => 'password']
        ];
    }

    public function  attributes(): array
    {
        return ['firstname', 'lastname','email', 'password', 'confirmPassword', 'status'];
    }

    public function labels(): array{
        return [
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'email' => 'Email',
            'password' => "Password",
            'passwordConfirm' => "Confirm password"
        ];
    }
}