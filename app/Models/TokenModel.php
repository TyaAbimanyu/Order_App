<?php

namespace App\Models;

use App\Entities\Token;
use CodeIgniter\Model;

class TokenModel extends Model
{
    protected $table = 'token_trs';
    protected $primaryKey = 'token_id';
    protected $returnType = Token::class;
    protected $useTimestamps = false;
    protected $createdField = 'create_at';
    protected $deletedField = 'delete_at';

    protected $allowedFields = ['token', 'user_ID','uu_id_t', 'create_at', 'delete_at'];
}