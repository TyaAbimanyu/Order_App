<?php

namespace App\Models\Users;

use App\Models\BaseModel;

class UserModel extends BaseModel{
  protected $table = 'user_ms';
  protected $primaryKey = 'user_id';
  protected $returnType = 'App\Entities\User\User';
  protected $useuseSoftDeletes = true;

  protected $allowedFields = [
    'user_uuid',
    'role_id',
    'user_name',
    'user_email',
    'user_password',
    'user_active',
  ];

  protected $validationRules = [
    'user_uuid' => [
      'label' => 'User UUID',
      'rules' => 'required|string',
    ],
    'role_id' => [
      'label' => 'Role ID',
      'rules' => 'required|integer',
    ],
    'user_name' => [
      'label' => 'User Name',
      'rules' => 'required|string',
    ],
    'user_email' => [
      'label' => 'User Email',
      'rules' => 'required|valid_email',
    ],
    'user_password' => [
      'label' => 'User Password',
      'rules' => 'required|string',
    ],
  ];

  protected $tableAlias = [
    'UUID' => 'user_uuid',
    'roleID' => 'role_id',
    'name' => 'user_name',
    'email' => 'user_email',
    'password' => 'user_password',
  ];
}