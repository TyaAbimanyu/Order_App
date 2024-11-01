<?php

namespace App\Models\Job;

use App\Models\BaseModel;

class JobApplicantModel extends BaseModel
{
  protected $table = 'job_applicant_ms';
  protected $primaryKey = 'job_applicant_id';
  protected $allowedFields = [
    'job_applicant_uuid',
    'job_id',
    'user_id',
  ];
  protected $returnType = 'App\Entities\Job\JobApplicant';
  protected $useSoftDelete = true;
  protected $validationRules = [
    'job_applicant_uuid' => [
      'label' => 'UUID',
      'rules' => 'required|string',
    ],
    'job_id' => [
      'label' => 'Job ID',
      'rules' => 'required|integer',
    ],
    'user_id' => [
      'label' => 'User ID',
      'rules' => 'required|integer',
    ],
  ];
  protected $tableAlias = [
    'ID' => 'job_applicant_id',
    'UUID' => 'job_applicant_uuid',
    'JobID' => 'job_id',
    'UserID' => 'user_id',
  ];
}
