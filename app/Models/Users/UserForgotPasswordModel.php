<?php

namespace App\Models\Users;

use App\Models\BaseModel;

class UserForgotPasswordModel extends BaseModel 
{
  protected $table = 'user_forgot_password_ms';
  protected $primaryKey = 'user_forgot_password_id';
  protected $returnType = 'App\Entities\User\UserForgotPassword';
  protected $useuseSoftDeletes = true;

  protected $allowedFields = [
    'user_forgot_password_uuid',
    'user_id',
    'user_forgot_password_code',
  ];

  protected $validationRules = [
    'user_forgot_password_uuid' => [
      'label' => 'User Forgot Password UUID',
      'rules' => 'required|string',
    ],
    'user_id' => [
      'label' => 'User ID',
      'rules' => 'required|integer',
    ],
    'user_forgot_password_code' => [
      'label' => 'User Forgot Password Code',
      'rules' => 'required|string',
    ],
  ];

  protected $tableAlias = [
    'UUID' => 'user_forgot_password_uuid',
    'userID' => 'user_id',
    'code' => 'user_forgot_password_code',
  ];
}