<?php

namespace App\Entities;
use CodeIgniter\Entity\Entity;

class Order extends Entity{
    protected $attributesOrder = [

        'order_id' => null,
        'order_total' => 0,
        'total_price' => 0,
        'menu_ID' => null,
        'user_ID' => null,
        'uu_id_o' => null,
        'order_at' => null,
        'update_at' => null,
        'delete_at' => null,

    ];

}