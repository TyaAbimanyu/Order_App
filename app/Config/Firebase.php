<?php
namespace Config;

use CodeIgniter\Config\BaseConfig;
class Firebase extends BaseConfig
{
  public $config = [
    'apiKey' => getenv('FIREBASE_API_KEY'),
    'authDomain' => getenv('FIREBASE_AUTH_DOMAIN'),
    'projectId' => getenv('FIREBASE_PROJECT_ID'),
    'storageBucket' => getenv('FIREBASE_STORAGE_BUCKET'),
    'messagingSenderId' => getenv('FIREBASE_MESSAGING_SENDER_ID'),
    'appId' => getenv('FIREBASE_APP_ID'),
    'measurementId' => getenv('FIREBASE_MEASUREMENT_ID')
  ];

  public $databaseUrl = null;
  public $credentials = null;

  public function __construct()
  {
    parent::__construct();
    
    $this->databaseUrl = getenv('FIREBASE_DATABASE_URL');
    $this->credentials = getenv('FIREBASE_CREDENTIALS_PATH');
  }
}

//Tst data yang main