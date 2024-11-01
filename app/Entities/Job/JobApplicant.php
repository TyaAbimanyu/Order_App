<?php

namespace App\Entities\Job;

use CodeIgniter\Entity\Entity;

class JobApplicant extends Entity
{
  protected $attributes = [
    'job_applicant_id' => null,
    'job_applicant_uuid' => '',
    'job_id' => null,
    'user_id' => null,
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'job_applicant_id' => 'int',
    'job_applicant_uuid' => 'string',
    'job_id' => 'int',
    'user_id' => 'int',
  ];
}
