<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InsertUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'userId' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addPrimaryKey('userId');
        $this->forge->createTable('user');
   
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
