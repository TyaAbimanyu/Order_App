<?php

namespace App\Models;

use App\Entities\User;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'user_ms';
    protected $primaryKey = 'user_id';

    protected $returnType = User::class;
    protected $createdField = 'created_at ';
    protected $updatedField = 'updated_at';

    protected $allowedFields = ['username', 'email', 'password', 'uuid','created_at', 'updated_at','deleted_at'];
}