<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu_ms';
    protected $primaryKey = 'menu_id';
    protected $returnType = \App\Entities\Menu::class;

    protected $createdField = 'create_at ';
    protected $updatedField = 'update_at';
    protected $deletedField = 'delete_at';
    protected $allowedFields = ['menu_name', 'menu_price', 'uu_id_m','create_at', 'update_at', 'delete_at'];
}
