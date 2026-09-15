<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGuestExamTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_guest_exam' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],            
            'id_guest' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'id_exam' => [
                'type' => 'INT',
                'constraint' => '11',
            ],                                    
        ]);

        $this->forge->addKey('id_guest_exam', true);
		$this->forge->createTable('guests_exams');
     
    }

    public function down()
    {
        $this->forge->dropTable('guest_exams');
    }
}
