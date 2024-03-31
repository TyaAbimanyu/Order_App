<?php
namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Token extends Entity
{
    protected $attributes = [
        'token_id'   => null,
        'token'     => null,
        'uu_id'    => null,
        'crete_at' => null,
        'delete_at' => null,
    ];
}