<?php

namespace App\Models\Post;

use App\Models\BaseModel;

class PostLikeModel extends BaseModel
{
  protected $table = 'post_like_trs';
  protected $primaryKey = 'post_like_id';
  protected $allowedFields = [
    'post_like_uuid',
    'post_id',
    'user_id',
  ];
  protected $returnType = 'App\Entities\Post\PostLike';
  protected $validationRules = [
    'post_like_uuid' => [
      'label' => 'UUID',
      'rules' => 'required|string',
    ],
    'post_id' => [
      'label' => 'Post ID',
      'rules' => 'required|integer',
    ],
    'user_id' => [
      'label' => 'User ID',
      'rules' => 'required|integer',
    ],
  ];
  protected $tableAlias = [
    'ID' => 'post_like_id',
    'UUID' => 'post_like_uuid',
    'PostID' => 'post_id',
    'UserID' => 'user_id',
  ];
}
