<?php

namespace App\Entities;
use CodeIgniter\Entity\Entity;

class Order extends Entity{
    protected $attributesOrder = [

        'orderId' => null,
        'orderTotal' => 0,
        'totalPrice' => 0,
        'orderAt' => null,
        'updateAt' => null,
        'deleteAt' => null,
        'menu_ID' => null,
        'token_ID' => null,
    ];

}