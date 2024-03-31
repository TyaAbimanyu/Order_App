<?php

namespace App\Models;

use App\Entities\Order;
use CodeIgniter\Model;

class OrderModel extends Model{
    protected $table = 'order_trs';
    protected $primaryKey =  'order_id';

    protected $returnType = Order::class;

    protected $allowedFields = ['order_total', 'total_price', 'order_at', 'update_at', 'delete_at', 'menu_id', 'uu_id'];

    protected $useTimestamps = true;

    protected $createdField = 'order_at';
    protected $updatedField = 'update_at';
    protected $deletedField =  'delete_at';

}
