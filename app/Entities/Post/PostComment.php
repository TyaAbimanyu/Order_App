<?php

namespace App\Entities\Post;

use CodeIgniter\Entity\Entity;

class PostComment extends Entity
{
  protected $attributes = [
    'post_comments_id' => null,
    'post_comments_uuid' => '',
    'post_id' => null,
    'user_id' => null,
    'comment_text' => '',
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'post_comments_id' => 'int',
    'post_comments_uuid' => 'string',
    'post_id' => 'int',
    'user_id' => 'int',
    'comment_text' => 'string',
  ];
}
