<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;
use Ramsey\Uuid\Uuid;

class InserSeeder extends Seeder
{
    public function run()
    {
       $this->insertUser();
       $this->insertMenu();
       $this->insertOrder();
       $this->insertToken();
    }

    private function insertUser(){

        $userModel = new UserModel();
        $uuid = Uuid::uuid4()->toString();

        $currentDateTime = date('Y-m-d H:i:s');

        $userData=[
            'username'=>'Aditya',
            'email'=>'adityasatria@gmail.com',
            'password'=>'12345',
            'uuid_u'=> $uuid,
            'create_at'=> $currentDateTime
        ];
        $userData1=[
            'username'=>'Abimanyu',
            'email'=>'tyaAbimanyu@yahoo.co.id',
            'password'=>'tidak Makan',
            'uuid_u'=> $uuid,
            'create_at'=> $currentDateTime
        ];
        $userData2=[
            'username'=>'Tyaa Aditya',
            'email'=>'YayayaTYa@yahoo.co.id',
            'password'=>'Senin Libur',
            'uuid_u'=> $uuid,
            'create_at'=> $currentDateTime
        ];

        //$this->db->query('INSERT INTO user(username,email,password,token) VALUES(:username:, :email:, :password:, :token:)', $userData);

        $this->db->table('user_ms')->insert($userData1);
    }

    private function insertMenu(){

        $currentDateTime = date('Y-m-d H:i:s');
        $uuid = Uuid::uuid4()->toString();

        $menuData=[
            'menu_name' => 'Burger Kotak',
            'menu_price' => 20000,
            'uu_id_m'=> $uuid,
            'create_at'=> $currentDateTime
        ];
        $menuData1=[
            'menu_name' => 'Nasi Gila Coklat',
            'menu_price' => 25000,
            'uu_id_m'=> $uuid,
            'create_at'=> $currentDateTime
        ];$menuData2=[
            'menu_name' => 'Rendang Merah',
            'menu_price' => 15000,
            'uu_id_m'=> $uuid,
            'create_at'=> $currentDateTime
        ];

        $this->db->table('menu_ms')->insert($menuData);
    }

    private function insertOrder(){

        $orderAt = date('Y-m-d H:i:s');
        $uuid = Uuid::uuid4()->toString();

        $orderData=[
            'order_total'=>'20',
            'total_price'=>'300000',
            'menu_ID'=>'1',
            'user_ID'=>'1',
            'uu_id_o'=>$uuid,
            'order_at'=>$orderAt,
        ];
        $orderData1=[
            'order_total'=>'10',
            'total_price'=>'150000',
            'menu_ID'=>'1',
            'user_ID'=>'1',
            'uu_id_o'=>$uuid,
            'order_at'=>$orderAt,
        ];

        $this->db->table('order_trs')->insert( $orderData );
    }

    private function insertToken(){
        $createAt = date('Y-m-d H:i:s');
        $uuid = Uuid::uuid4()->toString();

        $token = bin2hex(random_bytes(16));

        $tokenData=[
            'token'=>$token,
            'user_ID'=>'1',
            'uu_id_t'=>$uuid,
            'create_at'=>$createAt,
        ];
        $tokenData1=[
            'token'=>'',
            'user_ID'=>'1',
            'uu_id_t'=>$uuid,
            'create_at'=>$createAt,
        ];
        $this->db->table('token_trs')->insert($tokenData);
    }
}
