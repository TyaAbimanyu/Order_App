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
            'menu_id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'user_ID' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'uu_id_o' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => true,
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
        ]);

        $this->forge->addPrimaryKey('order_id');
        $this->forge->addForeignKey('menu_id', 'menu_ms', 'menu_id');
        $this->forge->addForeignKey('user_ID', 'user_ms', 'user_id');
        $this->forge->createTable('order_trs');
    }

    public function down()
    {
        $this->forge->dropTable('order_trs');
    }
}
