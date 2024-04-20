<?php

namespace App\Controllers;

use App\Models\TokenModel;
use CodeIgniter\API\ResponseTrait;
use App\Models\OrderModel;
use App\Models\MenuModel;

class OrderController extends BaseController{
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

    function getOrder(){
        // $data = json_decode(file_get_contents('php://input'), true); 
        // $data = $this->request->getPost();
        // $token = $data['token'];
        $token=$this->checkHeader();

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

    function deleteOrder($uu_id_o){
       $orderModel = new OrderModel();
        $orderData = $orderModel->where('uu_id_o', $uu_id_o);

        if($orderData){
            $deleted = $orderModel->delete();

            if($deleted){
                $response = [
                    'status' =>true,
                    'message'=>'Success Deleted Data'
                ];
            }else{
                $response = [
                    'status' =>false,
                    'message'=>'Failed Deleted Data'
                ];
            }
        }else{
            $response = [
                'status' =>false,
                'message'=>'Order Data Not Found'
            ];
        }
        return $this->respond( $response );
    }

    function updateOrder(){
        // $data = json_decode(file_get_contents('php://input'), true); 
        $data = $this->request->getRawInput();

        $uu_id_o = $data['uu_id_o'];
    
        $orderModel = new OrderModel();
        $orderData = $orderModel->where('uu_id_o', $uu_id_o)->first();
    
        if($orderData){
            if(isset($data['menu_name']) && isset($data['order_total'])) {
                $menu_name = $data['menu_name'];
                $order_total = $data['order_total'];
    
                // Mencari menu berdasarkan nama
                $menuModel = new MenuModel();
                $menu = $menuModel->where('menu_name', $menu_name)->first();
    
                if($menu){
                    $menu_id = $menu->menu_id;
                    $menu_price = $menu->menu_price;
    
                    $total_price = $menu_price * $order_total;

                    $data = [
                        'menu_id' => $menu_id,
                        'order_total' => $order_total,
                        'total_price' => $total_price,
                        'update_at' => date('Y-m-d H:i:s')
                    ];
                    
                    $orderModel->update($orderData->order_id, $data);
    
                    $response = [
                        'status' => true,
                        'message' => 'Successfully updated order!'
                    ];
                } else {
                    $response = [
                        'status' => false,
                        'message' => 'Failed to update order: Menu not found'
                    ];
                }
            } else {
                $response = [
                    'status' => false,
                    'message' => 'Failed to update order: Menu name or order total is missing'
                ];
            }
        } else {
            $response = [
                'status' => false,
                'message' => 'Failed to update order: Order not found'
            ];
        }
    
        return $response;
    }
}
