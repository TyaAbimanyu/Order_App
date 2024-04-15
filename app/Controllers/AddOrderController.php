<?php

namespace App\Controllers;

use App\Models\TokenModel;
use App\Models\MenuModel;
use App\Models\OrderModel;
use CodeIgniter\API\ResponseTrait;
use Ramsey\Uuid\Uuid;

class AddOrderController extends BaseController {
    use ResponseTrait;

    public function addOrder() {
        $data = json_decode(file_get_contents('php://input'), true); 

        // Memeriksa keberadaan token
        if(isset($data['token'])) {
            $token = $data['token']; 

            $tokenModel = new TokenModel();
            $tokenData = $tokenModel->where('token', $token)->first();

            if($tokenData){
                $user_Id = $tokenData->user_ID;
                $UUID = Uuid::uuid4()->toString(); 
                if(isset($data['menu_name']) && isset($data['order_total'])) {
                    $menu_name = $data['menu_name'];
                    $order_total = $data['order_total'];

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
                            'user_ID' => $user_Id,
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
            } else {
                $response = [
                    'status' => false,
                    'message' => 'Failed to add order: Invalid Token'
                ];
            }
        } else {
            $response = [
                'status' => false,
                'message' => 'Failed to add order: Token is missing'
            ];
        }
        
        return $this->respond($response);
    }
}
