<?php

namespace App\Entities\User;
use CodeIgniter\Entity\Entity;

class UserSettings extends Entity
{
  protected $attributes = [
    'user_settings_id' => null,
    'user_settings_uuid' => '',
    'user_id' => null,
    'settings_data' => '', //TODO: Kemungkinan data ini akan banyak jadi dikasih tanda terlebih dulu
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'user_settings_id' => 'integer',
    'user_settings_uuid' => 'string',
    'user_id' => 'integer',
    'settings_data' => 'string',
  ];
}