<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Menu extends Entity
{
    protected $attributes = [
        'menu_id' => null,
        'menu_name' => '',
        'menu_price' => '',
        'uu_id_m'=> null,
        'create_at' => null,
        'update_at' => null,
        'delete_at' => null,
    ];
}
