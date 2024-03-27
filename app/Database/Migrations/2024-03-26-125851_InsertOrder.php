<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InsertOrder extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'orderId'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'auto_increment'=>true
            ],'orderTotal'=>[
                'type'=>'INT',
                'constraint'=>10
            ],
            'orderPrice'=>[
                'type'=>'INT',
                'constraint'=>10
            ],
            'orderAt'=>[
                'type'=>'DATETIME',
                'null'=>true
            ],
            'updateAt'=>[
                'type'=>'DATETIME',
                'null'=>true
            ],
            'deleteAt'=>[
                'type'=>'DATETIME',
                'null'=>true
            ],
            'menu_ID'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true
            ],
            'token_ID'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true
            ],

        ]);

        $this->forge->addPrimaryKey('orderId');
        $this->forge->addForeignKey('menu_ID', 'menu', 'menuId');
        $this->forge->addForeignKey('token_ID', 'token', 'tokenId');

        $this->forge->createTable('order');
    }

    public function down()
    {
        $this->forge->dropTable('order');
    }
}
