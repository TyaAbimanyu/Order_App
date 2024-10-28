<?php

namespace App\Entities\User;

use CodeIgniter\Entity\Entity;

class cvFile extends Entity
{
  protected $attributes = [
    'cv_file_id' => null,
    'cv_file_uuid' => '',
    'profile_id' => null,
    'cv_file_name' => '',
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'cv_file_id' => 'integer',
    'cv_file_uuid' => 'string',
    'profile_id' => 'integer',
    'cv_file_name' => 'string',
  ];
}