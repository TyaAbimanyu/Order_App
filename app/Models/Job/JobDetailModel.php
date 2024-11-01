<?php

namespace App\Models\Job;

use App\Models\BaseModel;

class JobDetailModel extends BaseModel
{
  protected $table = 'job_detail_ms';
  protected $primaryKey = 'job_detail_id';
  protected $allowedFields = [
    'job_detail_uuid',
    'job_id',
    'job_detail_location',
    'job_detail_phone_number',
    'job_detail_email'
  ];
  protected $returnType = 'App\Entities\Job\JobDetail';
  protected $useSoftDelete = true;
  protected $validationRules = [
    'job_detail_uuid' => [
      'label' => 'UUID',
      'rules' => 'required|string',
    ],
    'job_id' => [
      'label' => 'Job ID',
      'rules' => 'required|integer',
    ],
    'job_detail_location' => [
      'label' => 'Location',
      'rules' => 'required|string',
    ],
    'job_detail_phone_number' => [
      'label' => 'Phone Number',
      'rules' => 'required|string',
    ],
    'job_detail_email' => [
      'label' => 'Email',
      'rules' => 'required|valid_email',
    ],
  ];
  protected $tableAlias = [
    'ID' => 'job_detail_id',
    'UUID' => 'job_detail_uuid',
    'JobID' => 'job_id',
    'Location' => 'job_detail_location',
    'PhoneNumber' => 'job_detail_phone_number',
    'Email' => 'job_detail_email',
  ];
}
