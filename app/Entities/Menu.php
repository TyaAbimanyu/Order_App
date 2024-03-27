<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Menu extends Entity
{
    protected $attributes = [
        'menuId' => null,
        'menuName' => '',
        'menuPrice' => '',
    ];
}
