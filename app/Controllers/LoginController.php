<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use App\Models\TokenModel;
use DateTime;
use Ramsey\Uuid\Uuid;

class LoginController extends BaseController{
    use ResponseTrait;

    public function login(){
        $data = $this->request->getPost();
         
        $validation = \Config\Services::validation();
        $validation->setRuleGroup('loginValidation');

        if(!$validation->run($data)){
            $errorUser = $validation->getErrors();
            return $this->fail((['message'=>$errorUser])); 
        }
         
        $username = $data['username'];
        $password = $data['password'];

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();
   
        if ($user) {
            if ($user->password === $password) {
                $user_id = $user->user_id;
                $UUID = Uuid::uuid4()->toString(); 

                $token = bin2hex(random_bytes(16));
                $currentDateTime = date('Y-m-d H:i:s');
            
                $tokenModel = new TokenModel();
                $tokenData = [
                    'token' => $token,
                    'user_ID'=>$user_id,
                    'uu_id_t' => $UUID,
                    'create_at' => $currentDateTime
                ];
                $tokenModel->insert($tokenData);
                $tokenId = $tokenModel->getInsertID();
                
                return $this->respond(['tokenId' => $tokenId, 'token' => $token,'create_at'=>$currentDateTime,'message' => 'Token generated successfully']);
            } else {
                return $this->fail('Invalid Username or Password');
            }
        }
    }
}
