<?php

namespace App\Models\Post;

use App\Models\BaseModel;

class PostCommentModel extends BaseModel
{
  protected $table = 'post_comments_ms';
  protected $primaryKey = 'post_comments_id';
  protected $allowedFields = [
    'post_comments_uuid',
    'post_id',
    'user_id',
    'comment_text',
  ];
  protected $returnType = 'App\Entities\Post\PostComment';
  protected $useSoftDelete = true;
  protected $validationRules = [
    'post_comments_uuid' => [
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
    'comment_text' => [
      'label' => 'Comment Text',
      'rules' => 'required|string',
    ],
  ];
  protected $tableAlias = [
    'ID' => 'post_comments_id',
    'UUID' => 'post_comments_uuid',
    'PostID' => 'post_id',
    'UserID' => 'user_id',
    'CommentText' => 'comment_text',
  ];
}
