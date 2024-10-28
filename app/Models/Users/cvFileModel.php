<?php

namespace App\Models\Users;

use App\Models\BaseModel;

class cvFileModel extends BaseModel
{
  protected $table = 'cv_files_ms';
  protected $primaryKey = 'cv_file_id';
  protected $allowedFields = [
    'cv_file_uuid',
    'profile_id',
    'cv_file_name',
  ];
  protected $returnType = 'App\Entities\User\cvFile';
  protected $useSoftDelete = true;

  protected $validationRules = [
    'cv_file_uuid' => [
      'label' => 'CV File UUID',
      'rules' => 'required|string'
    ],
    'profile_id' => [
      'label' =>'Profile ID' ,
      'rules' => 'required|integer'
    ],
    'cv_file_name' => [
      'label' => 'CV File Name',
      'rules' => 'required|string'
    ],
  ];

  protected $tableAlias = [
    'UUID' => 'cv_file_uuid',
    'profileID' => 'profile_id',
    'cvFileName' => 'cv_file_name',
  ];
}