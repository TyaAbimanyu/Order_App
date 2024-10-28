<?php

use CodeIgniter\Entity\Entity;

class UserForgotPassword extends Entity
{
  protected $attributes = [
    'user_forgot_password_id' => null,
    'user_forgot_password_uuid' => '',
    'user_id' => null,
    'user_forgot_password_code' => '',
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'user_forgot_password_id' => 'integer',
    'user_id' => 'integer',
    'user_forgot_password_uuid' => 'string',
    'user_forgot_password_code' => 'string',
  ];
}