<?php

namespace App\Models\Relation;

use App\Models\BaseModel;

class ConnectionModel extends BaseModel
{
  protected $table = 'connection_ms';
  protected $primaryKey = 'connection_id';
  protected $allowedFields = [
    'connection_uuid',
    'user_id',
    'user_connected_id',
    'status_accepted',
  ];
  protected $returnType = 'App\Entities\Relation\Connection';
  protected $useSoftDelete = true;
  protected $validationRules = [
    'connection_uuid' => [
      'label' => 'UUID',
      'rules' => 'required|string',
    ],
    'user_id' => [
      'label' => 'User ID',
      'rules' => 'required|integer',
    ],
    'user_connected_id' => [
      'label' => 'User Connected ID',
      'rules' => 'required|integer',
    ],
  ];
  protected $tableAlias = [
    'ID' => 'connection_id',
    'UUID' => 'connection_uuid',
    'UserID' => 'user_id',
    'UserConnectedID' => 'user_connected_id',
    'StatusAccepted' => 'status_accepted',
  ];
}