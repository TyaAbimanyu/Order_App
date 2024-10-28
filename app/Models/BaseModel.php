<?php

namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{
  protected $useuseSoftDeletes = false;
  protected $useTimestamps = true;
  protected $skipValidation = false;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';
  protected $tableAlias = [];


  protected $imagePath = '';
  protected $imageQuality = 90;
  protected $imageWidth = 0;
  protected $imageHeight = 1024;

  function __construct()
  {
    parent::__construct();
  }

  function imagePath()
  {
    return $this->imagePath;
  }

  function uploadImageConfig()
  {
    return [
      'imageQuality' => $this->imageQuality,
      'imageWidth' => $this->imageWidth,
      'imageHeight' => $this->imageHeight
    ];
  }

  function getErrorData()
  {
    $errorsData = $this->errors();
    $result = [];

    if (!empty($errorsData) && count($errorsData) > 0) {
      foreach ($errorsData as $key => $errorsDataRow):
        $keyResult = array_search($key, $this->tableAlias);
        if ($keyResult !== false) {
          $result[$keyResult] = $errorsDataRow;
        }
      endforeach;
    }

    return $result;
  }

  protected function _resultErrors()
  {
    return [
      'responseCode' => 0,
      'message' => $this->validation->getErrors()
    ];
  }
}
