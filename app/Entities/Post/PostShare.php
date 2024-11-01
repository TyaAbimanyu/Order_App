<?php

namespace App\Entities\Post;

use CodeIgniter\Entity\Entity;

class PostShare extends Entity
{
    protected $attributes = [
        'post_share_id' => null,
        'post_share_uuid' => '',
        'post_id' => null,
        'user_id' => null,
        'post_share_link' => '',
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null,
    ];

    protected $casts = [
        'post_share_id' => 'int',
        'post_share_uuid' => 'string',
        'post_id' => 'int',
        'user_id' => 'int',
        'post_share_link' => 'string',
    ];
}
