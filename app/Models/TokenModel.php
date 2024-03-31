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
    protected $createdField = 'created_at';
    protected $deletedField = 'deleted_at';

    protected $allowedFields = ['token', 'uu_id', 'created_at', 'deleted_at'];
}