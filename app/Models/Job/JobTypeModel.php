<?php

namespace App\Models\Job;

use App\Models\BaseModel;

class JobTypeModel extends BaseModel
{
  protected $table = 'job_type_ms';
  protected $primaryKey = 'job_type_id';
  protected $allowedFields = [
    'job_type_uuid',
    'job_type',
  ];
  protected $returnType = 'App\Entities\Job\JobType';
  protected $useSoftDelete = true;
  protected $validationRules = [
    'job_type_uuid' => [
      'label' => 'UUID',
      'rules' => 'required|string',
    ],
    'job_type' => [
      'label' => 'Job Type',
      'rules' => 'required|integer',
    ],
  ];
  protected $tableAlias = [
    'ID' => 'job_type_id',
    'UUID' => 'job_type_uuid',
    'Type' => 'job_type',
  ];
}
