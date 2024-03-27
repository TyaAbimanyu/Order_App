<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'menuId';
    protected $returnType = 'App\Entities\Menu';
    protected $allowedFields = ['menuName', 'menuPrice'];
}
