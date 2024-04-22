<?php
namespace App\Validations;

class validationPassword{
    public function passwordInvalid($password, $fields, $data, string &$error = null):bool{
        if(strlen($password)<8 && strlen($password)>16 || preg_match('/^(?=.*[a-zA-Z])(?=.*\d).{8,16}$/', $password)){
            return true;
        }else{
            $error  = 'Password must be between 8 and 16 Characters and contain one number and one letter';
            return false;

        }

    }
}