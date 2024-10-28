<?php

namespace App\Entities\User;

use CodeIgniter\Entity\Entity;

class Role extends Entity 
{
  protected $attributes = [
    'role_id' => null,
    'role_uuid' => '',
    'role_title' => '',
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];
  
  protected $casts = [
    'role_id' => 'integer',
    'role_uuid' => 'string',
    'role_title' => 'string',
  ];
}