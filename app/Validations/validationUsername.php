<?php
namespace App\Validations;
use App\Models\UserModel;


class validationUsername{

    public function validateLogin($password, $fields, $data, string &$error = null){
        $username = $data['username'];

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if(!$user){
            $error = 'User Not Found';
            return false;
        }

        if (isset($user->password) && $user->password === $password) {
            return true;
        }else{
            $error = 'User Not Found';
            return false;
        }
    }

    public function validateUser($username, $fields, $data, string &$error = null){
        $username = $data['username'];

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if(!$user){
            $error = 'User Not Found';
            return false;
        }
    }

}