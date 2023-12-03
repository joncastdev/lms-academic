<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ExamSeeder extends Seeder
{
    public function run()
    {
       $data = [
			[			
				'name' => 'Codeigniter'											
			],
			[				
				'name' => 'Symfony'				
			],				
			// 	'name' => 'Laravel'												
			// ],
			// [				
			// 	'name' => 'Yii'									
			// ],
			// [				
			// 	'name' => 'CakePHP'									
			// ],
			// [				
			// 	'name' => 'Slim'									
			// ],
			// [				
			// 	'name' => 'Laminas'									
			// ],				
			// [				
			// 	'name' => 'PHP'									
			// ],

			// [				
			// 	'name' => 'Laravel9',
			// 	'id_price' => 1									
			// ],
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

		$this->db->table('exams')->insertBatch($data);
    }
}
