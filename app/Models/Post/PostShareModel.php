<?php

namespace App\Models\Post;

use App\Models\BaseModel;

class PostShareModel extends BaseModel
{
  protected $table = 'post_share_trs';
  protected $primaryKey = 'post_share_id';
  protected $allowedFields = [
    'post_share_uuid',
    'post_id',
    'user_id',
    'post_share_link',
  ];
  protected $returnType = 'App\Entities\Post\PostShare';
  protected $validationRules = [
    'post_share_uuid' => [
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
    'post_share_link' => [
      'label' => 'Share Link',
      'rules' => 'required|string',
    ],
  ];
  protected $tableAlias = [
    'ID' => 'post_share_id',
    'UUID' => 'post_share_uuid',
    'PostID' => 'post_id',
    'UserID' => 'user_id',
    'ShareLink' => 'post_share_link',
  ];
}
