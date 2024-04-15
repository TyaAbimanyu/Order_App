<?php

namespace App\Models;

use App\Entities\Order;
use CodeIgniter\Model;

class OrderModel extends Model{
    protected $table = 'order_trs';
    protected $primaryKey =  'order_id';

    protected $returnType = Order::class;

    protected $allowedFields = ['order_total', 'total_price', 'menu_id', 'user_ID','uu_id_o','order_at', 'update_at', 'delete_at'];

    protected $useTimestamps = false;

    protected $createdField = 'order_at';
    protected $updatedField = 'update_at';
    protected $deletedField =  'delete_at';

}
