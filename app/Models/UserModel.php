<?php

namespace App\Models;

use App\Entities\User;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'user_ms';
    protected $primaryKey = 'user_id';

    protected $returnType = User::class;
    protected $useTimeStamps = false;
    protected $createdField = 'create_at ';
    protected $updatedField = 'update_at';
    protected $deletedField = 'delete_at';

    protected $allowedFields = ['username', 'email', 'password', 'uuid_u','create_at', 'update_at','delete_at'];
}