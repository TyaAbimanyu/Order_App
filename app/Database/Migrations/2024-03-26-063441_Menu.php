<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'menu_id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'menu_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'menu_price' => [
                'type' => 'INT',
                'constraint' => 100,
            ],
            'uu_id_m' => [
                'type' => 'VARCHAR',
                'constraint' => 36,
                'unique' => true,
            ],
            'create_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'update_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'delete_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('menu_id');
        $this->forge->createTable('menu_ms');
    }

    public function down()
    {
        $this->forge->dropTable('menu_ms');
    }
}
