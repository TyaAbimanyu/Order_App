<?php

namespace App\Entities;
use CodeIgniter\Entity\Entity;

class Order extends Entity{
    protected $attributesOrder = [

        'order_id' => null,
        'order_total' => 0,
        'total_price' => 0,
        'order_at' => null,
        'update_at' => null,
        'delete_at' => null,
        'menu_ID' => null,
        'uu_id' => null,
    ];

}