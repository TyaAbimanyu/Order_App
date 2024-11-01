<?php

namespace App\Entities\Post;

use CodeIgniter\Entity\Entity;

class Post extends Entity
{
  protected $attributes = [
    'post_id' => null,
    'post_uuid' => '',
    'user_id' => null,
    'post_image' => '',
    'post_text' => '',
    'post_link' => '',
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'post_id' => 'int',
    'post_uuid' => 'string',
    'user_id' => 'int',
    'post_image' => 'string',
    'post_text' => 'string',
    'post_link' => 'string',
  ];
}
