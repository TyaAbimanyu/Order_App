<?php

namespace App\Models\Relation;

use App\Models\BaseModel;

class UserFollowModel extends BaseModel
{
  protected $table = 'user_follow_ms';
  protected $primaryKey = 'user_follow_id';
  protected $allowedFields = [
  'user_follow_uuid',
  'user_id',
  'follower_user_id',
  'followed_user_id',
  ];
  protected $returnType = 'App\Entities\Relation\UserFollow';
  protected $useSoftDelete = true;
  protected $validationRules = [
  'user_follow_uuid' => [
    'label' => 'User Follow UUID',
    'rules' => 'required|string',
  ],
  'user_id' => [
    'label' => 'User ID',
    'rules' => 'required|integer',
  ],
  'follower_user_id' => [
    'label' => 'Follower User ID',
    'rules' => 'required|integer',
  ],
  'followed_user_id' => [
    'label' => 'Followed User ID',
    'rules' => 'required|integer',
  ],
  ];
  protected $tableAlias = [
  'ID' => 'user_follow_id',
  'UUID' => 'user_follow_uuid',
  'UserID' => 'user_id',
  'FollowerUserID' => 'follower_user_id',
  'FollowedUserID' => 'followed_user_id',
  ];
}
