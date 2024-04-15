<?php

namespace App\Controllers;

use App\Models\TokenModel;
use CodeIgniter\API\ResponseTrait;
use App\Models\MenuModel;

session_start();

class MenuController extends BaseController{
    use ResponseTrait;

    function menu(){
  
        $menuModel = new MenuModel();
        
        $menuData = $menuModel->findAll();

        $menuList=[];

        foreach($menuData as $menu){
            $menuList[]=[
                'menu_name' => $menu->menu_name,
                'menu_price' => $menu->menu_price
            ];
        }

        return $this->respond($menuList); 
    }

    function logout(){
        $data=json_decode(file_get_contents( 'php://input'), true); 

        $checkToken  = $data['token'];

        $tokenModel = new TokenModel();

        if($tokenModel->where('token',$checkToken)->delete()){
            return $this->respond(['massage'=> 'Success','delete'=>true]);
        }else{
            return $this->respond(['massage'=> 'Failed','delete'=>false]);    
        }
    }

    function validateToken(){
        $data=json_decode(file_get_contents( 'php://input'), true); 

        $checkToken  = $data['token'];

        $tokenModel = new TokenModel();
        $checker = $tokenModel->where('token',$checkToken)->first();

        if($checker){
            return $this->respond(['massage'=> 'Success','success'=>true]);
        }else{
            return $this->respond(['massage'=> 'Failed','success'=>false]);    
        }
    }
}