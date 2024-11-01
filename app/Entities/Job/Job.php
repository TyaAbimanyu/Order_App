<?php

namespace App\Entities\Job;

use CodeIgniter\Entity\Entity;

class Job extends Entity
{
  protected $attributes = [
    'job_id' => null,
    'job_uuid' => '',
    'job_title' => '',
    'job_type_id' => null,
    'job_salary' => '',
    'job_quota' => null,
    'created_by' => '',
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'job_id' => 'int',
    'job_uuid' => 'string',
    'job_type_id' => 'int',
    'job_salary' => 'string',
    'job_quota' => 'int',
    'created_by' => 'string',
  ];
}
