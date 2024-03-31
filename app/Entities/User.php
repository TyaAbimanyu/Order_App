<?php
namespace App\Entities;
use CodeIgniter\Entity\Entity;

class User extends Entity {
    protected $attributes = [
        'user_id' => null,
        'username' => '',
        'email' => '',
        'password' => '',
        'uuid' => null,
        'create_at' => null,
        'update_at' => null,
        'delete_at' => null,
    ];
}

