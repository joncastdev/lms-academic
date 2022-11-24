<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStateClientsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_state_client' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'state_client' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],                                                       
        ]);

        $this->forge->addKey('id_state_client', true);
		$this->forge->createTable('state_clients');
    }

    public function down()
    {
        $this->forge->dropTable('state_clients');
    }
}
