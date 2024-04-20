<?php

namespace App\Controllers;

use App\Models\TokenModel;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use Ramsey\Uuid\Uuid;

class SignupController extends BaseController{
    use ResponseTrait;

    public function signup(){
        $validate = \Config\Services::validation();
        // $data = json_decode(file_get_contents('php://input'), true); 
        $data = $this->request->getPost();


        $validate->setRuleGroup('validationPassword');

        if($validate->run($data)===false){
            return $this->fail(['message'=>$validate->getErrors()]);
        }

        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];

        $userModel = new UserModel();
        $uuid = Uuid::uuid4()->toString();
        $currentDateTime = date('Y-m-d H:i:s');
        $user = [
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'uuid_u'=>$uuid,
            'create_at' => $currentDateTime,
        ];

        $userModel->insert($user);
        $userId = $userModel->insertID();

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'User Successfully Registered'
        ]);
    }
}
