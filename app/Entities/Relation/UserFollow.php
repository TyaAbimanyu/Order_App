<?php

namespace App\Entities\Relation;

use CodeIgniter\Entity\Entity;

class UserFollow extends Entity
{
  protected $attributes = [
    'user_follow_id' => null,
    'user_follow_uuid' => '',
    'user_id' => null,
    'follower_user_id' => null,
    'followed_user_id' => null,
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'user_follow_id' => 'int',
    'user_follow_uuid' => 'string',
    'user_id' => 'int',
    'follower_user_id' => 'int',
    'followed_user_id' => 'int',
  ];
}
