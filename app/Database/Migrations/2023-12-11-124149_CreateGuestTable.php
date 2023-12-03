<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGuestTable extends Migration
{

	
	public function up()
	{
		$this->forge->addField([
			'id_guest' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],			
			'first_name' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'last_name' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],			
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'unique'         => true,
			],
			// 'password' => [
			// 	'type' => 'VARCHAR',
			// 	'constraint' => '100',
			// ],
			// 'token' => [
			// 	'type' => 'VARCHAR',
			// 	'constraint' => '100',
			// 	'unique'         => true,
			// ],				
			// 'id_role' => [
			// 	'type' => 'INT',
			// 	'constraint' => '11',
			// ],
			// 'id_statu' => [
			// 	'type' => 'INT',
			// 	'constraint' => '11',
			// ],
			// 'is_buyer' => [
			// 	'type' => 'INT',
			// 	'constraint' => '11',				
			// ],			                          
		]);

		$this->forge->addKey('id_guest', true);
		$this->forge->createTable('guests');     
	}

	public function down()
	{
		$this->forge->dropTable('guests');
	}
}
