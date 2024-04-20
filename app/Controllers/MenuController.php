<?php

namespace App\Controllers;

use App\Models\TokenModel;
use CodeIgniter\API\ResponseTrait;
use App\Models\MenuModel;

session_start();

class MenuController extends BaseController{
    use ResponseTrait;

    function  checkHeader(){
        $authorizationHeader = $this->request->getHeaderLine('Authorization');  

        if(empty($authorizationHeader)) {
            return 'Header is Empty';
        }

        $authorizationParts = explode(' ', $authorizationHeader);

        if(count($authorizationParts) !== 2 || strtolower($authorizationParts[0]) !== 'bearer') {            
            return 'Header not Valid';
        }

        $token = $authorizationParts[1];

        return $token;
    }

    function menu(){
  
        $menuModel = new MenuModel();
        
        $menuData = $menuModel->findAll();

        $menuList=[];

        foreach($menuData as $menu){
            $menuList[]=[
                'menu_name' => $menu->menu_name,
                'menu_price' => $menu->menu_price,
                'uu_id_m' => $menu->uu_id_m
            ];
        }

        return $this->respond($menuList); 
    }

    function logout(){
        // $data = $this->request->getPost();

        // $checkToken  = $data['token'];

        $checkToken = $this->checkHeader();

        $tokenModel = new TokenModel();

        if($tokenModel->where('token',$checkToken)->delete()){
            return $this->respond(['massage'=> 'Success','delete'=>true]);
        }else{
            return $this->respond(['massage'=> 'Failed','delete'=>false]);    
        }
    }

    function validateToken(){
        // $data = $this->request->getPost();

        // $checkToken = $data['token'];

        $checkToken = $this->checkHeader();
        $tokenModel = new TokenModel();
        $checker = $tokenModel->where('token',$checkToken)->first();

        if($checker){
            return $this->respond(['massage'=> 'Success','success'=>true]);
        }else{
            return $this->respond(['massage'=> 'Failed','success'=>false]);    
        }
    }

   
}