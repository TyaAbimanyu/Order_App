<?php
namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Token extends Entity
{
    protected $attributes = [
        'tokenId'   => null,
        'token'     => null,
        'userId'    => null,
        'createAt'  => null,
        'deleteAt'  => null,
    ];
}