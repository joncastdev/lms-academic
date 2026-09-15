<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateQuestionTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_question' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'question' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],                        
            'id_exam' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
             'id_amswer' => [
                'type' => 'INT',
                'constraint' => '11',
            ],                                              
        ]);

        $this->forge->addKey('id_question', true);
		$this->forge->createTable('questions');
    }

    public function down()
    {
       $this->forge->dropTable('questions');
    }
}
