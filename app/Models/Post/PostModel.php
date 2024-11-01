<?php

namespace App\Models\Post;

use App\Models\BaseModel;

class PostModel extends BaseModel
{
  protected $table = 'post_ms';
  protected $primaryKey = 'post_id';
  protected $allowedFields = [
    'post_uuid',
    'user_id',
    'post_image',
    'post_text',
    'post_link',
  ];
  protected $returnType = 'App\Entities\Post\Post';
  protected $useSoftDelete = true;
  protected $validationRules = [
    'post_uuid' => [
      'label' => 'UUID',
      'rules' => 'required|string',
    ],
    'user_id' => [
      'label' => 'User ID',
      'rules' => 'required|integer',
    ],
    'post_image' => [
      'label' => 'Image',
      'rules' => 'permit_empty|string',
    ],
    'post_text' => [
      'label' => 'Text',
      'rules' => 'permit_empty|string',
    ],
    'post_link' => [
      'label' => 'Link',
      'rules' => 'permit_empty|string',
    ],
  ];
  protected $tableAlias = [
    'ID' => 'post_id',
    'UUID' => 'post_uuid',
    'UserID' => 'user_id',
    'Image' => 'post_image',
    'Text' => 'post_text',
    'Link' => 'post_link',
  ];
}
