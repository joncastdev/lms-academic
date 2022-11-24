<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
       $data = [
			[			
				'name' => 'Codeigniter4',
				'id_price' => 1									
			],
			[				
				'name' => 'Symfony6',
				'id_price' => 1									
			],			
		];

		$this->db->table('courses')->insertBatch($data);
    }
}
