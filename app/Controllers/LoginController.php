<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class LoginController extends BaseController{
    use ResponseTrait;

    function login(){
        $data = $this->request->getJSON();

        $username = $data->username;
        $password = $data->password;

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if ($user) {
            if ($user->username === $username && $user->password === $password) {

                $token = bin2hex(random_bytes(16));     
                // Buat Algoritma saat user berhasil login dan masuk kedalam Login Page, maka 
                // token aka digunakan sebagai session setiap user masuk kedalam home page, 
                // Dan Token itu juga digunakan sebagai kode unik saat user melaukan order makanan.

                return $this->respond('User authenticated successfully.');
               
            } else {
                return $this->failUnauthorized('Invalid Username or Password');
            }
        } else {
            return $this->failUnauthorized('User not found');
        }
    }
}
