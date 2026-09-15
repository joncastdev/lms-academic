<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
	public function run()
	{ 

	$this->db->table('roles')->emptyTable();      

		$data = [
			[			
				'role' => 'admin'								
			],
			[				
				'role' => 'user'							
			],			
		];

		$this->db->table('roles')->insertBatch($data);
	}
}
