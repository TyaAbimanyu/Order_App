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
        'uu_id' => [
            'type' => 'VARCHAR',
            'constraint' => 36,
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'deleted_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
    ]);

        $this->forge->addPrimaryKey('token_id');
        $this->forge->addForeignKey('uu_id', 'user_ms', 'uuid');
        $this->forge->createTable('token_trs');
    }

    public function down()
    {
        $this->forge->dropTable('token_trs');
    }
}
