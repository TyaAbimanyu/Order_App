<?php

namespace App\Models;

use App\Entities\User;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'user';
    protected $primaryKey = 'userId';

    protected $returnType = User::class;

    protected $allowedFields = ['username', 'email', 'password'];
}