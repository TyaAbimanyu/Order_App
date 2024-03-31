<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu_ms';
    protected $primaryKey = 'menu_id';
    protected $returnType = \App\Entities\Menu::class;

    protected $createdField = 'created_at ';
    protected $updatedField = 'updated_at';
    protected $allowedFields = ['menu_name', 'menu_price', 'created_at', 'updated_at', 'deleted_at'];
}
