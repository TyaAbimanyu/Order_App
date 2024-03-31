<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\OrderModel;
use App\Models\MenuModel;

class HomeController extends BaseController{
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

}