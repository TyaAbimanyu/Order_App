<?php

namespace App\Models\Users;

use App\Models\BaseModel;

class RoleModel  extends BaseModel
{
  protected $table = 'role_ms';
  protected $primaryKey = 'role_id';
  protected $returnType = 'App\Entities\User\Role';
  protected $useuseSoftDeletes = true;

  protected $allowedFields = [
    'role_uuid',
    'role_title',
  ];

  protected $validationRules = [
    'role_uuid' => [
      'label' => 'Role UUID',
      'rules' => 'required|string',
    ],
    'role_title' => [
      'label' => 'Role Title',
      'rules' => 'required|string',
    ],
  ];

  protected $tableAlias = [
    'UUID' => 'role_uuid',
    'title' => 'role_title',
  ];
}