<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InsertToken extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'token_id' => [
            'type' => 'INT',
            'constraint' => 10,
            'unsigned' => true,
            'auto_increment' => true,
        ],
        'token' => [
            'type' => 'VARCHAR',
            'constraint' => 32,
        ],
        'user_ID' => [
            'type' => 'INT',
            'constraint' => 10,
            'unsigned' => true,
        ],
        'uu_id_t' => [
            'type' => 'VARCHAR',
            'constraint' => 36,
            'unique' => true,
        ],
        'create_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'delete_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
    ]);

        $this->forge->addPrimaryKey('token_id');
        $this->forge->addForeignKey('user_ID', 'user_ms', 'user_id');
        $this->forge->createTable('token_trs');
    }

    public function down()
    {
        $this->forge->dropTable('token_trs');
    }
}
