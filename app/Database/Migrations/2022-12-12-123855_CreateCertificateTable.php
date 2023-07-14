<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCertificateTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_certificate' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],           
            'id_course' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'created_at'       => [
                'type'           => 'DATETIME',             
            ],
            'updated_at'       => [
                'type'           => 'DATETIME',             
            ],                                              
        ]);

        $this->forge->addKey('id_certificate', true);
		$this->forge->createTable('certificates');
    }

    public function down()
    {
       $this->forge->dropTable('certificates');
    }
}
