<?php

namespace App\Libraries;

use Config\Firebase;
use Google\Cloud\Firestore\FirestoreClient;

class FirebaseService
{
  private $firestore;

  public function __construct()
  {
    $config = new Firebase();
    
    $this->firestore = new FirestoreClient([
      'projectId' => getenv('FIREBASE_PROJECT_ID'),
      'keyFilePath' => $config->credentials
    ]);
  }
}