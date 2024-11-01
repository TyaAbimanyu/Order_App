<?php

namespace App\Entities\Relation;

use CodeIgniter\Entity\Entity;

class ConnectonRequest extends Entity
{
  protected $attributes = [
    'connection_request_id' => null,
    'connection_request_uuid' => '',
    'user_id' => null,
    'connection_request_target_id' => null,
    'connection_request_status' => 0,
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'connection_request_id' => 'int',
    'connection_request_uuid' => 'string',
    'user_id' => 'int',
    'connection_request_target_id' => 'int',
    'connection_request_status' => 'int',
  ];
}