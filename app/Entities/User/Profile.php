<?php

namespace App\Entities\User;

use CodeIgniter\Entity\Entity;

class Profile extends Entity
{
  protected $attributes = [
    'profile_id' => null,
    'profile_uuid' => '',
    'user_id' =>  null,
    'job_id' => null,
    'cv_file_id' => null,
    'profile_picture' => '',
    'user_phone_number' => '',
    'user_about_us' => '',
    'user_job_seeking_status' => false,
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null,
  ];

  protected $casts = [
    'profile_id' => 'integer',
    'profile_uuid' => 'string',
    'user_id' => 'integer',
    'job_id' => 'integer',
    'cv_file_id' => 'integer',
    'profile_picture' => 'string',
    'user_phone_number' => 'string',
    'user_about_us' => 'string',
    'user_job_seeking_status' => 'boolean',
  ];

  function getUserJobSeekingStatus(): bool  
  {
    return $this->attributes['user_job_seeking_status'] === true ? true : false;
  }
}