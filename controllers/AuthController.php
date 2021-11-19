<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function login(Request $request){
        $this->setLayout('auth');
        $this->render('login');
    }

    public function register(Request $request){
        $errors = [];
        if($request->isPost()){
            $registerModel = new RegisterModel();
            $registerModel->loadData($request->getBody());

            if($registerModel->validate() && $registerModel->register()){
                return 'Success';
            }
            return 'Handle submitted data';
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'errors' => $errors
        ]);
    }
}