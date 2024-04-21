<?php

namespace App\Controllers;

use App\Models\TokenModel;
use App\Models\MenuModel;
use App\Models\OrderModel;
use CodeIgniter\API\ResponseTrait;
use Ramsey\Uuid\Uuid;

class AddOrderController extends BaseController {
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

    public function addOrder() {
        // $data = json_decode(file_get_contents('php://input'), true);
        $data = $this->request->getPost(); 
        $token = $this->checkHeader(); 

        // $validation = \Config\Services::validation();
        // $validation->setRuleGroup('addOrderValidation');

        // if (!$validation->run($data)) {
        //     return $this->fail((['message' => $validation->getErrors()]));
        // }

        $menu_name = $data['menu_name'];
        $order_total = $data['order_total'];

        $tokenModel = new TokenModel();
        $tokenData = $tokenModel->where('token', $token)->first();

        $user_ID = $tokenData->user_ID;
         $UUID = Uuid::uuid4()->toString(); 
        
         if($menu_name && $order_total) {
            // Mencari menu berdasarkan nama
            $menuModel = new MenuModel();
            $menu = $menuModel->where('menu_name', $menu_name)->first();
            if($menu){
                $menu_id = $menu->menu_id;
                $menu_price = $menu->menu_price;
                // Menghitung total harga pesanan
                $total_price = $menu_price * $order_total;
                // Menyimpan pesanan ke dalam database
                $orderModel = new OrderModel(); 
                $data = [
                    'menu_id' => $menu_id,
                    'uu_id_o'=>$UUID,
                    'order_total' => $order_total,
                    'total_price' => $total_price,
                    'user_ID' => $user_ID,
                    'order_at' => date('Y-m-d H:i:s')
                ];
                $orderModel->insert($data);

                $response = [
                    'status' => true,
                    'message' => 'Successfully added order!'
                ];
            } else {
                $response = [
                    'status' => false,
                    'message' => 'Failed to add order: Menu not found'
                ];
            }
        } else {
            $response = [
                'status' => false,
                'message' => 'Failed to add order: Menu name or order total is missing'
            ];
        }
        return $this->respond($response);
    }
}
