<?php
// namespace App\Validations;

// use App\Models\MenuModel;

// class validationOrder {

//     public function validateMenuNameExist(string $str, array $data, string $fields, ?string &$error = null): bool {
//         $menuName = $data['menuName'];

//         if (empty($menuName)) {
//             $error = 'The field is required.';
//             return false;
//         }

//         $menuModel = new MenuModel();
//         $menu = $menuModel->where('menu_name', $menuName)->first();

//         if (!$menu) {
//             $error = 'The selected is invalid.';
//             return false;
//         }

//         return true;
//     }    
// }
 