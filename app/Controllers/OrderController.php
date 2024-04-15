<?php

namespace App\Controllers;

use App\Models\TokenModel;
use CodeIgniter\API\ResponseTrait;
use App\Models\OrderModel;
use App\Models\MenuModel;

class OrderController extends BaseController{
    use ResponseTrait;

    function getOrder(){
        $data = json_decode(file_get_contents('php://input'), true); 
        $token = $data['token'];

        $tokenModel = new TokenModel();
        $tokenData = $tokenModel->where('token', $token)->first();

        if($tokenData){
            $user_Id = $tokenData->user_ID;

            $orderModel = new OrderModel();
            $menuModel = new MenuModel();
            
            $orderData = $orderModel->where('user_ID', $user_Id)->findAll();

            $orderList=[];

            foreach($orderData as $order){
                $menu = $menuModel->find($order->menu_id);

                $orderList[]=[
                    'uu_id_o'=>$order->uu_id_o,
                    'menu_name' => $menu->menu_name,
                    'order_total' => $order->order_total,
                    'total_price' => $order->total_price,
                    'order_at' => $order->order_at
                ];
            }

            return $this->respond($orderList);
        }else{
            return $this->failNotFound('Token Not Found');
        }
    }

    function deleteOrder(){
        $data = json_decode(file_get_contents('php://input'), true); 
        $token = $data['token'];

        $tokenModel = new TokenModel();
        $tokenData = $tokenModel->where('token', $token)->first();

        if($tokenData){
            $user_id = $tokenData->user_ID;

            $orderModel = new OrderModel();
            $orderData = $orderModel->where('user_id', $user_id)->first();

            if ($orderData) {
                $order_id = $orderData->order_id;
                $order_id_data = $orderModel->where('order_id', $order_id)->first();
                if($order_id_data){
                    $deleted = $orderModel->delete($order_id);
                }else{
                    return $this->failServerError('Gagal menghapus order');
                } 
                return $this->respondDeleted('Order Berhasil Dihapus');
            }else{
                return $this->failNotFound('Data Order tidak ditemukan');
            }
        } else{
            return $this->failNotFound('Token tidak ditemukan');
        }
    }

    function updateOrder(){
        $data = json_decode(file_get_contents('php://input'), true); 
        $token = $data['token'];

        $tokenModel = new TokenModel();
        $tokenData = $tokenModel->where('token', $token)->first();

        if($tokenData){
            $user_id = $tokenData->user_ID;
            $orderModel = new OrderModel();
             
            $orderData = $orderModel->where('user_ID', $user_id)->first();

            if($orderData){
                $order_id = $orderData->order_id;

                $order_id_data = $orderModel->find($order_id);

                if($order_id_data){
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

                            $data = [
                                'menu_id' => $menu_id,
                                'order_total' => $order_total,
                                'total_price' => $total_price,
                                'update_at' => date('Y-m-d H:i:s')
                            ];
                            
                            $orderModel->update($order_id, $data);

    
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
                }else{
                    return $this->failNotFound('Order tidak ditemukan');
                }
            }
        }else{
            return $this->failNotFound('Data Order tidak ditemukan');
         }
    }
}
