<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCountrysTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_country' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'country' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'lat' => [
				'type' => 'Float',				
			],
			'long' => [
				'type' => 'Float',				
			],                                                
		]);

		$this->forge->addKey('id_country', true);
		$this->forge->createTable('countrys');
	}

	public function down()
	{
		$this->forge->dropTable('countrys');
	}
}
