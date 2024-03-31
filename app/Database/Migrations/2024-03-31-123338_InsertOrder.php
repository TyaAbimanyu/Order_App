<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InsertOrder extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'order_id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'order_total' => [
                'type' => 'INT',
                'constraint' => 100,
            ],
            'total_price' => [
                'type' => 'INT',
                'constraint' => 100,
            ],
            'order_at' => [
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
            'menu_id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'uu_id' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addPrimaryKey('order_id');
        $this->forge->addForeignKey('menu_id', 'menu_ms', 'menu_id');
        $this->forge->addForeignKey('uu_id', 'user_ms', 'uuid');
        $this->forge->createTable('order_trs');
    }

    public function down()
    {
        $this->forge->dropTable('order_trs');
    }
}
