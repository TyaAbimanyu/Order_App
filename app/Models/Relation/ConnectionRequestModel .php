<?php

namespace App\Models\Relation;

use App\Models\BaseModel;

class ConnectionRequestModel extends BaseModel
{
  protected $table = 'connection_request_ms';
  protected $primaryKey = 'connection_request_id';
  protected $allowedFields = [
    'connection_request_uuid',
    'user_id',
    'connection_request_target_id',
    'connection_request_status',
  ];
  protected $returnType = 'App\Entities\Relation\ConnectionRequest';
  protected $useSoftDelete = true;
  protected $validationRules = [
    'connection_request_uuid' => [
      'label' => 'Connection Request UUID',
      'rules' => 'required|string',
    ],
    'user_id' => [
      'label' => 'User ID',
      'rules' => 'required|integer',
    ],
    'connection_request_target_id' => [
      'label' => 'Connection Request Target ID',
      'rules' => 'required|integer',
    ],
    'connection_request_status' => [
      'label' => 'Connection Request Status',
      'rules' => 'required|integer',
    ],
  ];
  protected $tableAlias = [
    'ID' => 'connection_request_id',
    'UUID' => 'connection_request_uuid',
    'UserID' => 'user_id',
    'TargetUserID' => 'connection_request_target_id',
    'Status' => 'connection_request_status',
  ];
}
