<?php

namespace App\Models\Job;

use App\Models\BaseModel;

class JobModel extends BaseModel
{
  protected $table = 'job_ms';
  protected $primaryKey = 'job_id';
  protected $allowedFields = [
    'job_uuid',
    'job_title',
    'job_type_id',
    'job_salary',
    'job_quota',
    'created_by',
  ];
  protected $returnType = 'App\Entities\Job\Job';
  protected $useSoftDelete = true;
  protected $validationRules = [
    'job_uuid' => [
      'label' => 'UUID',
      'rules' => 'required|string',
    ],
    'job_title' => [
      'label' => 'Job Title',
      'rules' => 'required|string',
    ],
    'job_type_id' => [
      'label' => 'Job Type ID',
      'rules' => 'required|integer',
    ],
    'job_salary' => [
      'label' => 'Job Salary',
      'rules' => 'required|string',
    ],
    'job_quota' => [
      'label' => 'Job Quota',
      'rules' => 'required|integer',
    ],
    'created_by' => [
      'label' => 'Created By',
      'rules' => 'required|string',
    ],
  ];
  protected $tableAlias = [
    'ID' => 'job_id',
    'UUID' => 'job_uuid',
    'Title' => 'job_title',
    'TypeID' => 'job_type_id',
    'Salary' => 'job_salary',
    'Quota' => 'job_quota',
    'CreatedBy' => 'created_by',
  ];
}
