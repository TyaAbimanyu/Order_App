<?php

namespace App\Models;

use App\Entities\Token;
use CodeIgniter\Model;

class TokenModel extends Model
{
    protected $table = 'token';
    protected $primaryKey = 'tokenId';
    protected $returnType = Token::class;
    protected $useTimestamps = true;
    protected $createdField = 'createAt';
    protected $deletedField = 'deleteAt';

    protected $allowedFields = ['token', 'userId', 'createAt', 'deleteAt'];
}