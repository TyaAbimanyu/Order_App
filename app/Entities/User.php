<?php
namespace App\Entities;
use CodeIgniter\Entity\Entity;

class User extends Entity {
    protected $attributes = [
        'userId' => null,
        'userName' => '',
        'email' => '',
        'password' => '',
    ];
}

