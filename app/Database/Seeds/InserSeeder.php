<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class InserSeeder extends Seeder
{
    public function run()
    {
//        $this->insertUser();
        $this->insertMenu();
        //$this->insertOrder();
        //$this->insertToken();
    }

    private function insertUser(){

        $userModel = new UserModel();
        $uuid = bin2hex(random_bytes(16));

        $currentDateTime = date('Y-m-d H:i:s');

        $userData=[
            'username'=>'Aditya',
            'email'=>'adityasatria@gmail.com',
            'password'=>'12345',
            'uuid'=> $uuid,
            'created_at'=> $currentDateTime
        ];
        $userData1=[
            'username'=>'Abimanyu',
            'email'=>'tyaAbimanyu@yahoo.co.id',
            'password'=>'tidak Makan',
            'uuid'=> $uuid,
            'created_at'=> $currentDateTime
        ];
        $userData2=[
            'username'=>'Tyaa Aditya',
            'email'=>'YayayaTYa@yahoo.co.id',
            'password'=>'Senin Libur',
            'uuid'=> $uuid,
            'created_at'=> $currentDateTime
        ];

        //$this->db->query('INSERT INTO user(username,email,password,token) VALUES(:username:, :email:, :password:, :token:)', $userData);

        $this->db->table('user_ms')->insert($userData2);
    }

    private function insertMenu(){

        $currentDateTime = date('Y-m-d H:i:s');

        $menuData=[
            'menu_name' => 'Burger Kotak',
            'menu_price' => 20000,
            'created_at'=> $currentDateTime
        ];
        $menuData1=[
            'menu_name' => 'Nasi Gila Coklat',
            'menu_price' => 25000,
            'created_at'=> $currentDateTime
        ];$menuData2=[
            'menu_name' => 'Rendang Merah',
            'menu_price' => 15000,
            'created_at'=> $currentDateTime
        ];

        $this->db->table('menu_ms')->insert($menuData2);
    }

    private function insertOrder(){

        $orderAt = date('Y-m-d H:i:s');

        $orderData=[
            'order_total'=>'20',
            'total_price'=>'300000',
            'order_at'=>$orderAt,
            'update_at'=>null,
            'delete_at'=>null,
            'menu_ID'=>'1',
            'uu_id'=>'edb0229c3a5e8c912e000f990e6f3c2f'
        ];
        $orderData1=[
            'order_total'=>'10',
            'total_price'=>'150000',
            'order_at'=>$orderAt,
            'update_at'=>null,
            'delete_at'=>null,
            'menu_ID'=>'3',
            'token_ID'=>'1'
        ];

        $this->db->table('order_trs')->insert( $orderData );
    }

    private function insertToken(){
        $createAt = date('Y-m-d H:i:s');

        $token = bin2hex(random_bytes(16));

        $tokenData=[
            'token'=>'',
            'uu_id'=>'f0e95ee5c5ed7d263a4b68709aa7db69',
            'created_at'=>$createAt,
        ];
        $tokenData1=[
            'token'=>'',
            'uu_id'=>'f0e95ee5c5ed7d263a4b68709aa7db69',
            'created_at'=>$createAt,
        ];

        $tokenData1['token']=$token;

        $this->db->table('token_trs')->insert($tokenData1);
    }
}
