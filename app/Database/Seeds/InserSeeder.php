<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InserSeeder extends Seeder
{
    public function run()
    {
        //$this->insertUser();
        //$this->insertMenu();
        //$this->insertOrder();
        //$this->inserToken();
    }

    private function insertUser(){
        $userData=[
            'username'=>'Aditya',
            'email'=>'adityasatria@gmail.com',
            'password'=>'12345',
        ];
        $userData1=[
            'username'=>'Abimanyu',
            'email'=>'tyaAbimanyu@yahoo.co.id',
            'password'=>'tidak Makan',
        ];
        $userData2=[
            'username'=>'Tyaa Aditya',
            'email'=>'YayayaTYa@yahoo.co.id',
            'password'=>'Senin Libur',
        ];

        //$this->db->query('INSERT INTO user(username,email,password,token) VALUES(:username:, :email:, :password:, :token:)', $userData);

        $this->db->table('user')->insert($userData2);
    }

    private function insertMenu(){
        $menuData=[
            'menuName' => 'Burger Kotak',
            'menuPrice' => 20000,
        ];
        $menuData1=[
            'menuName' => 'Nasi Gila Coklat',
            'menuPrice' => 25000,
        ];$menuData2=[
            'menuName' => 'Rendang Merah',
            'menuPrice' => 15000,
        ];

        $this->db->table('menu')->insert($menuData);
    }

    private function insertOrder(){

        $orderAt = date('Y-m-d H:i:s');
        $updateAt = $orderAt;

        //$userData = $this->db->query('SELECT * FROM user WHERE token = :token:',['token'=>$token])->getRowArray();

        $orderData=[
            'orderTotal'=>'20',
            'orderPrice'=>'300000',
            'orderAt'=>$orderAt,
            'updateAt'=>$updateAt,
            'deleteAt'=>null,
            'menu_ID'=>'1',
            'token_ID'=>'1'
        ];

        $this->db->table('order')->insert( $orderData );
    }

    private function inserToken(){
        $createAt = date('Y-m-d H:i:s');
        $deleteAt = $createAt;

        $token = bin2hex(random_bytes(16));

        $tokenData=[
            'token'=>'',
            'user_ID'=>1,
            'createAt'=>$createAt,
            'deleteAt'=>$deleteAt
        ];
        $tokenData1=[
            'token'=>'',
            'user_ID'=>5,
            'createAt'=>$createAt,
            'deleteAt'=>$deleteAt
        ];

        $tokenData1['token']=$token;

        $this->db->table('token')->insert($tokenData1);
    }
}
