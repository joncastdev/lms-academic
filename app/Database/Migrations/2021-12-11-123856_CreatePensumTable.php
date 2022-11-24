<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePensumTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pensum' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'pensum' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'video' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],             
            'id_course' => [
                'type' => 'INT',
                'constraint' => '11',
            ],                                             
        ]);

        $this->forge->addKey('id_pensum', true);
		$this->forge->createTable('pensums');
    }

    public function down()
    {
       $this->forge->dropTable('pensums');
    }
}
