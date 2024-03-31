<?php

namespace App\Controllers;

use App\Models\TokenModel;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class SignupController extends BaseController{
    use ResponseTrait;

    public function signup(){
        $data = $this->request->getJSON();

        $username = $data->username;
        $email = $data->email;
        $password = $data->password;

        if(strlen($username) < 8 || strlen($username) > 16){
            return $this->response->setJSON([
                'status' => false,
                'message'=> 'Username must be between 8 until 16 character'
            ]);
        }

        if(!filter_var($email. FILTER_VALIDATE_EMAIL)){
            return $this->response->setJSON([
                'status'=>'error',
                'message'=>'Invalid email Format'
            ]);
        }

        if(strlen($password)<8 || strlen($password)>16 || !preg_match('/^(?=.*[a-zA-Z])(?=.*\d).{8,16}$/', $password)){
            return $this->response->setJSON([
                'status' => 'error',
                'message'=> 'Password must be between 8 and 16 Characters and contain one number and one letter'
            ]);
        }

        $userModel = new UserModel();
        $uuid = bin2hex(random_bytes(16));
        $currentDateTime = date('Y-m-d H:i:s');

        $user = [
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'uuid'=>$uuid,
            'created_at' => $currentDateTime,
        ];

        $userModel->insert($user);
        $userId = $userModel->insertID();

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'User Successfully Registered'
        ]);
    }
}
