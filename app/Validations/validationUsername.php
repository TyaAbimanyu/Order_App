<?php
namespace App\Validations;
use App\Models\UserModel;


class validationUsername{

    public function validateLogin($password, $fields, $data, string $error = null):bool{
        $username = $data['username'];

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if(!$user || $user->password !== $password){
            return false;
        }

        return true;
    }

}