<?php

namespace App\Models;

use App\Entities\Order;
use CodeIgniter\Model;

class OrderModel extends Model{
    protected $table = 'order';
    protected $primaryKey =  'id_order';

    protected $returnType = Order::class;

    protected $allowedFields = ['orderTotal', 'orderPrice', 'orderAt', 'updateAt', 'deletAt', 'menu_ID', 'token_ID'];

    protected $useTimestamps = true;

    protected $createdField = 'orderAt';
    protected $updatedField = 'updateAt';

}
