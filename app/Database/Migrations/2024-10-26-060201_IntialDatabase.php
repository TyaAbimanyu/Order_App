<?php

namespace App\Database\Migrations;

use App\Libraries\FirebaseService;
use CodeIgniter\Database\Migration;
use Ramsey\Uuid\Uuid;

class IntialDatabase extends Migration
{
  protected $firebaseService;
  public function __construct()
  {
      $this->firebaseService = new FirebaseService();
  }
  public function up()
  {
    $usersCollection = $this->firebaseService->firestore->collection('users');
    $usersCollection->document('sampleUser')->set([
      'user_id' => 1,
      'user_uuid' => Uuid::uuid4()->toString(),
      'user_name' => 'Sample User',
      'user_email' => 'sampleuser@example.com',
      'user_password' => 123456,
      'user_active' => true,
    ]);
  }

  public function down()
  {
    $usersCollection = $this->firebaseService->firestore->collection('users');
    $usersCollection->document('sampleUser')->delete();

    echo "Firestore initial document deleted.";
  }
}
