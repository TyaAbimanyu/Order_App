<?php

namespace App\Models\Users;

use App\Models\BaseModel;

class UserSettingsModel extends BaseModel
{
  protected $table = 'user_settings_ms';
  protected $primaryKey = 'user_settings_id';
  protected $allowedFields = [
    'user_settings_uuid',
    'user_id',
    'settings_data',
  ];
  protected $returnType = 'App\Entities\User\UserSettings';
  protected $validationRules = [
    'user_settings_uuid' => [
      'label' => 'User Settings UUID',
      'rules' => 'required|string',
    ],
    'user_id' => [
      'label' => 'User ID',
      'rules' => 'required|integer',
    ],
    'settings_data' => [ //TODO: Kemungkinan data ini akan banyak jadi dikasih tanda terlebih dulu
      'label' => 'Settings Data',
      'rules' => 'required|string',
    ],
  ];

  protected $tableAlias = [
    'UUID' => 'user_settings_uuid',
    'userID' => 'user_id',
    'data' => 'settings_data',
  ];  

}