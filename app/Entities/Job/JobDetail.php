<?php

namespace App\Entities\Job;

use CodeIgniter\Entity\Entity;

class JobDetail extends Entity
{
  protected $attributes = [
    'job_detail_id' => null,
    'job_detail_uuid' => '',
    'job_id' => null,
    'job_detail_location' => '',
    'job_detail_phone_number' => '',
    'job_detail_email' => '',
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'job_detail_id' => 'int',
    'job_detail_uuid' => 'string',
    'job_id' => 'int',
    'job_detail_location' => 'string',
    'job_detail_phone_number' => 'string',
    'job_detail_email' => 'string',
  ];
}
