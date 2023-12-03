<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateExamTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_exam' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],            
            // 'id_question' => [
            //     'type' => 'INT',
            //     'constraint' => '11',
            // ],                                             
        ]);

        $this->forge->addKey('id_exam', true);
		$this->forge->createTable('exams');
    }

    public function down()
    {
       $this->forge->dropTable('exams');
    }
}
