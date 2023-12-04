<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCertiguestTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_certificateguest' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],           
            'id_exam' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
             'id_guest' => [
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

        $this->forge->addKey('id_certificateguest', true);
		$this->forge->createTable('certificatesguest');
    }

    public function down()
    {
       $this->forge->dropTable('certificatesguest');
    }
}
