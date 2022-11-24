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
			[				
				'name' => 'Yii2',
				'id_price' => 1									
			],
			[				
				'name' => 'Cakephp4',
				'id_price' => 1									
			],
			[				
				'name' => 'Laravel9',
				'id_price' => 1									
			],
			// [				
			// 	'name' => 'Symfony5',
			// 	'id_price' => 1									
			// ],
			// [				
			// 	'name' => 'Codeigniter3',
			// 	'id_price' => 1									
			// ],
			// [				
			// 	'name' => 'Mysql5',
			// 	'id_price' => 1									
			// ],
			// [				
			// 	'name' => 'Postgresql10',
			// 	'id_price' => 1									
			// ],			
		];

		$this->db->table('courses')->insertBatch($data);
    }
}
