<?php
namespace App\Validations;

use App\Models\MenuModel;

class validationOrder {
  public function validateMenuName(string $menu_name, $fields, $data, string $error = null):bool{
    $menuModel = new MenuModel();

    $menu = $menuModel->where('menu_name', $menu_name);

    if(!$menu){
        return false;
    }

    return true;
  }
}
 