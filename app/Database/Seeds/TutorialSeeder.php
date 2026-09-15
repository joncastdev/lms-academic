<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TutorialSeeder extends Seeder
{
	public function run()
	{  

	$this->db->table('tutorials')->truncate();     

		// $data = [
		// 	[			
		// 		'name' => 'GitHub',
		// 		'tutorial' => 'https://youtu.be/JBa_rwN_A6I'								
		// 	],
		// 	[				
		// 		'name' => 'MySQL',
		// 		'tutorial' => 'https://youtu.be/6GMaUCHaA88'							
		// 	],
		// 	[				
		// 		'name' => 'PostgreSQL',
		// 		'tutorial' => 'https://youtu.be/4r3g66YJ9lc'							
		// 	],
		// 	[				
		// 		'name' => 'CodeIgniter 3',
		// 		'tutorial' => 'https://youtu.be/_UT0enWaOYE'							
		// 	],
		// 	[				
		// 		'name' => 'CodeIgniter 4',
		// 		'tutorial' => 'https://youtu.be/GlPfy6t1VLI'							
		// 	],
		// 	[				
		// 		'name' => 'Laravel 10',
		// 		'tutorial' => 'https://youtu.be/v_xXYRyAeHg'							
		// 	],
		// 	[				
		// 		'name' => 'Symfony 5',
		// 		'tutorial' => 'https://youtu.be/UKHv97qArHQ'							
		// 	],
		// 	[				
		// 		'name' => 'Symfony 6',
		// 		'tutorial' => 'https://youtu.be/FaviyUtXafU'							
		// 	],
		// 	[				
		// 		'name' => 'Cakephp 4',
		// 		'tutorial' => 'https://youtu.be/MS7Ar_ukVPw'							
		// 	],							
		// ];

	$data = [
			[			
				'name' => 'GitHub',
				'tutorial' => 'https://www.youtube.com/embed/JBa_rwN_A6I'								
			],
			[
			    'name' => 'MySQL',
				'tutorial' => 'https://www.youtube.com/embed/6GMaUCHaA88'							
			],
			[				
				'name' => 'PostgreSQL',
				'tutorial' => 'https://www.youtube.com/embed/4r3g66YJ9lc'							
			],
			[				
				'name' => 'CodeIgniter 3',
				'tutorial' => 'https://www.youtube.com/embed/_UT0enWaOYE'							
			],
			[				
				'name' => 'CodeIgniter 4',
				'tutorial' => 'https://www.youtube.com/embed/GlPfy6t1VLI'							
			],
			[				
				'name' => 'Laravel 10',
				'tutorial' => 'https://www.youtube.com/embed/v_xXYRyAeHg'							
			],
			[				
				'name' => 'Symfony 5',
				'tutorial' => 'https://www.youtube.com/embed/UKHv97qArHQ'							
			],
			[				
				'name' => 'Symfony 6',
				'tutorial' => 'https://www.youtube.com/embed/FaviyUtXafU'							
			],
			[				
				'name' => 'Cakephp 4',
				'tutorial' => 'https://www.youtube.com/embed/MS7Ar_ukVPw'							
			],							
		];

		$this->db->table('tutorials')->insertBatch($data);
	}
}
