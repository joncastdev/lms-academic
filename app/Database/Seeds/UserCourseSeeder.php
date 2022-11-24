<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class UserCourseSeeder extends Seeder
{
	public function run()
	{		

		$data = [
			[			
				'id_user' => 1,
				'id_course' => 1				
			],
			[				
				'id_user' => 2,
				'id_course' => 2				
			],			
		];

		
		$this->db->table('users_courses')->insertBatch($data);

	}
}
