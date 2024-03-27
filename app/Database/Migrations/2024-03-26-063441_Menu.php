<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'menuId'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'menuName'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],'menuPrice'=>[
                'type'=>'INT',
                'constraint'=>100
            ],
        ]);
        
        $this->forge->addKey('menuId', true);
        $this->forge->createTable('menu');
    }

    public function down()
    {
        $this->forge->dropTable('menu');
    }
}
