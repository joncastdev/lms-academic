<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAmswerTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_amswer' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'amswer' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],                  
                                           
        ]);

        $this->forge->addKey('id_amswer', true);
		$this->forge->createTable('amswer');
    }

    public function down()
    {
       $this->forge->dropTable('amswer');
    }
}
