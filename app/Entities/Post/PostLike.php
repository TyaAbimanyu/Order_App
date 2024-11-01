<?php

namespace App\Entities\Post;

use CodeIgniter\Entity\Entity;

class PostLike extends Entity
{
  protected $attributes = [
    'post_like_id' => null,
    'post_like_uuid' => '',
    'post_id' => null,
    'user_id' => null,
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'post_like_id' => 'int',
    'post_like_uuid' => 'string',
    'post_id' => 'int',
    'user_id' => 'int',
  ];
}
