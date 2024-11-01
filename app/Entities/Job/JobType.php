<?php

namespace App\Entities\Job;

use CodeIgniter\Entity\Entity;

class JobType extends Entity
{
  protected $attributes = [
    'job_type_id' => null,
    'job_type_uuid' => '',
    'job_type' => null,
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'job_type_id' => 'int',
    'job_type_uuid' => 'string',
    'job_type' => 'int',
  ];
}
