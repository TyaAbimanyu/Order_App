<?php

namespace App\Models\Users;

use App\Models\BaseModel;

class ProfileModel extends BaseModel
{
  protected $table = 'profiles_ms';
  protected $primaryKey = 'profile_id';
  protected $allowedFields = [
    'profile_uuid',
    'user_id',
    'job_id',
    'cv_file_id',
    'profile_picture',
    'user_phone_number',
    'user_about_us',
    'user_job_seeking_status',
  ];
  protected $returnType = 'App\Entities\User\Profile';
  protected $useSoftDelete = true;

  protected $validationRules = [
    'profile_uuid' => [
      'label' => 'Profile UUID',
      'rules' => 'required|string'
    ],
    'user_id' => [
      'label' =>'User ID' ,
      'rules' => 'required|integer'
    ],
    'job_id' => [
      'label' => 'Job ID',
      'rules' => 'required|integer'
    ],
    'cv_file_id' => [
      'label' => 'CV File ID',
      'rules' => 'required|integer'
    ],
    'profile_picture' => [
      'label' => 'Profuil Picture',
      'rules' => 'required|string'
    ],
    'user_phone_number' => [
      'label' => 'User Phone Number',
      'rules' => 'required|string'
    ],
    'user_about_us' => [
      'label' => 'User About Us',
      'rules' => 'required|string'
    ],
  ];

  protected $tableAlias = [
    'UUID' => 'profile_uuid',
    'userID' => 'user_id',
    'jobID' => 'job_id',
    'cvFileID' => 'cv_file_id',
    'profilePicture' => 'profile_picture',
    'userPhoneNumber' => 'user_phone_number',
    'userAboutUs' => 'user_about_us',
    'userJobSeekingStatus' => 'user_job_seeking_status',
  ];
}