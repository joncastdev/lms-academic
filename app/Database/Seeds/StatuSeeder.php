<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatuSeeder extends Seeder
{
	public function run()
	{       

		$data = [
			[			
				'status' => 'verified'								
			],
			[				
				'status' => 'not verified'							
			],			
		];

		$this->db->table('status')->insertBatch($data);
	}
}
