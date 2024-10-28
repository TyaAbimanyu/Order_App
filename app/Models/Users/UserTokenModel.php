<?php

namespace App\Models\Users;

use App\Models\BaseModel;

class UserTokenModel extends BaseModel
{
  protected $table = 'user_token_ms';
  protected $primaryKey = 'user_token_id';
  protected $returnType = 'App\Entities\User\UserToken';
  protected $allowedFields = [
    'user_token_uuid',
    'user_id',
    'user_token',
  ];
  protected $validationRules = [
    'user_token_uuid' => [
      'label' => 'User Token UUID',
      'rules' => 'required|string',
    ],
    'user_id' => [
      'label' => 'User ID',
      'rules' => 'required|integer',
    ],
    'user_token' => [
      'label' => 'User Token',
      'rules' => 'required|string',
    ],
  ];

  protected $tableAlias = [
    'UUID' => 'user_token_uuid',
    'userID' => 'user_id',
    'token' => 'user_token',
  ];
}