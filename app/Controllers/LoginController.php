<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use App\Models\TokenModel;
use DateTime;

class LoginController extends BaseController{
    use ResponseTrait;

    public function login(){
        $data = $this->request->getJSON();

        $username = $data->username;
        $password = $data->password;

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();
   
        if ($user) {
            if ($user->password === $password) {
                $UUID = $user->uuid; 

                $token = bin2hex(random_bytes(16));

                $time = new DateTime();
                $currentDateTime = date('Y-m-d H:i:s');
            
                $tokenModel = new TokenModel();
                $tokenData = [
                    'uu_id' => $UUID,
                    'token' => $token,
                    'created_at' => $currentDateTime
                ];
                $tokenModel->insert($tokenData);
                $tokenId = $tokenModel->getInsertID();

                return $this->respond(['tokenId' => $tokenId, 'token' => $token,'created_at'=>$currentDateTime,'message' => 'Token generated successfully']);
            } else {
                return $this->failUnauthorized('Invalid Username or Password');
            }
        } else {
            return $this->failUnauthorized('User not found');
        }
    }
}
