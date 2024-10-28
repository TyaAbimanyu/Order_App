<?php

namespace App\Entities\User;

use CodeIgniter\Entity\Entity;

class User extends Entity{
  protected $attributes = 
  [
    'user_id' => null,
    'user_uuid' => '',
    'user_name' => '',
    'user_email' => '',
    'user_password' => '',
    'user_active' => false,
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'user_uuid' => 'string' ,
    'user_name' => 'string',
    'user_email' => 'string',
    'user_password' => 'string',
    'user_active' => 'boolean',
  ];  

  function setPassword(string $password){
    $this->attributes['user_password'] = password_hash($password, PASSWORD_DEFAULT);
    return $this;
  }
  function getUserActive(): bool
  {
    return $this->attributes['user_active'] === true ? true : false;
  }
}