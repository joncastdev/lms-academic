<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTutorialsTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_tutorial' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'tutorial' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],                                              
		]);

		$this->forge->addKey('id_tutorial', true);
		$this->forge->createTable('tutorials');
	}

	public function down()
	{
		$this->forge->dropTable('tutorials');
	}
}
