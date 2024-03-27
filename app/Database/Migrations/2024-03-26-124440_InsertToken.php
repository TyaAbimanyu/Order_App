<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InsertToken extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'tokenId' => [
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
        'createAt' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'deleteAt' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
    ]);

    $this->forge->addPrimaryKey('tokenId');
    $this->forge->addForeignKey('user_ID', 'user', 'userId', 'CASCADE', 'CASCADE');
    $this->forge->createTable('token');
    }

    public function down()
    {
        $this->forge->dropTable('token');
    }
}
