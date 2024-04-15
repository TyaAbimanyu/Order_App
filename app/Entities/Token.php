<?php
namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Token extends Entity
{
    protected $attributes = [
        'token_id'   => null,
        'token'     => null,
        'user_ID' => null,
        'uu_id_t'    => null,
        'create_at' => null,
        'delete_at' => null,
    ];
}