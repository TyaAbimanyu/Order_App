<?php

namespace App\Entities\User;

use CodeIgniter\Entity\Entity;

class UserToken extends Entity
{
  protected $attributes = [
    'user_token_id' => null,
    'user_token_uuid' => '',
    'user_id' => null,
    'user_token' => '',
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'user_token_id' => 'integer',
    'user_token_uuid' => 'string',
    'user_id' => 'integer',
    'user_token' => 'string',
  ];
}