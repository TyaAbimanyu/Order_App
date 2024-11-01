<?php

namespace App\Models\Relation;

use App\Models\BaseModel;

class ConnectionRecommendationModel extends BaseModel
{
  protected $table = 'connection_recommendation_ms';
  protected $primaryKey = 'connection_recommendation_id';
  protected $allowedFields = [
    'connection_recommendation_uuid',
    'user_id',
    'recommended_user_id',
    'connection_recommendation_reason',
  ];
  protected $returnType = 'App\Entities\Relation\ConnectionRecommendation';
  protected $useSoftDelete = true;
  protected $validationRules = [
    'connection_recommendation_uuid' => [
      'label' => 'UUID',
      'rules' => 'required|string',
    ],
    'user_id' => [
      'label' => 'User ID',
      'rules' => 'required|integer',
    ],
    'recommended_user_id' => [
      'label' => 'Recommended User ID',
      'rules' => 'required|integer',
    ],
    'connection_recommendation_reason' => [
      'label' => 'Recommendation Reason',
      'rules' => 'permit_empty|string',
    ],
  ];
  protected $tableAlias = [
    'ID' => 'connection_recommendation_id',
    'UUID' => 'connection_recommendation_uuid',
    'UserID' => 'user_id',
    'RecommendedUserID' => 'recommended_user_id',
    'RecommendationReason' => 'connection_recommendation_reason',
  ];
}
