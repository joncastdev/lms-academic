<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCourseTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_course' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],            
            'id_price' => [
                'type' => 'INT',
                'constraint' => '11',
            ],                                             
        ]);

        $this->forge->addKey('id_course', true);
		$this->forge->createTable('courses');
    }

    public function down()
    {
       $this->forge->dropTable('courses');
    }
}
