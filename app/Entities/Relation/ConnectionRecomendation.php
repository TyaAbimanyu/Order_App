<?php

namespace App\Entities\Relation;

use CodeIgniter\Entity\Entity;

class ConnectionRecomendation extends Entity
{
  protected $attributes = [
    'connection_recommendation_id' => null,
    'connection_recommendation_uuid' => '',
    'user_id' => null,
    'recommended_user_id' => null,
    'connection_recommendation_reason' => '',
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'connection_recommendation_id' => 'int',
    'connection_recommendation_uuid' => 'string',
    'user_id' => 'int',
    'recommended_user_id' => 'int',
    'connection_recommendation_reason' => 'string',
  ];
}
