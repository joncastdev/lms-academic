<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserCourseTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user_course' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],            
            'id_user' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'id_course' => [
                'type' => 'INT',
                'constraint' => '11',
            ],                                    
        ]);

        $this->forge->addKey('id_user_course', true);
		$this->forge->createTable('users_courses');
     
    }

    public function down()
    {
        $this->forge->dropTable('users_courses');
    }
}
