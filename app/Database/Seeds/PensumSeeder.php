<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PensumSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[			
				'pensum' => 'Install',
				'video' => '1)ci4_instalacion_en.mp4',
				'id_course' => 1									
			],
			[				
				'pensum' => 'Controllers',
				'video' => '2)ci4_controllers_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Routes',
				'video' => '3)ci4_routes_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Create Controllers',
				'video' => '4)ci4_newcontroller_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'ENV File',
				'video' => '5)ci4_env_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Database Config',
				'video' => '6)ci4_database_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Models',
				'video' => '7)ci4_models_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Migrations',
				'video' => '8)ci4_migrations_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Seeds Part 1',
				'video' => '9)ci4_seed1_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Seeds Part 2',
				'video' => '10)ci4_seed2_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Layouts',
				'video' => '11)ci4_layout_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Erros in PHP 8',
				'video' => '12)ci4_errorphp8_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Index',
				'video' => '13)ci4_indextable_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Resource Part 1',
				'video' => '14)ci4_resource1_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Resource Part 2',
				'video' => '15)ci4_resource2_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Resource Part 3',
				'video' => '16)ci4_resource3_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Resource Part 4',
				'video' => '17)ci4_resource4_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Get Post Method',
				'video' => '18)ci4_getpost_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Model Insert',
				'video' => '19)ci4_modelinsert_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Validation',
				'video' => '20)ci4_validback_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Flashdata',
				'video' => '21)ci4_flashdata_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Entity',
				'video' => '22)ci4_entity_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Edit',
				'video' => '23)ci4_edit_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Delete',
				'video' => '24)ci4_delete_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Reports PDF',
				'video' => '25)ci4_pdf_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Login Part 1',
				'video' => '26)ci4_login1_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Login Part 2',
				'video' => '27)ci4_login2_en.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Custom Middleware',
				'video' => '28)ci4_midleware_en.mp4',
				'id_course' => 1								
			],			
			[			
				'pensum' => 'Install',
				'video' => '1)syminstallen.mp4',
				'id_course' => 2									
			],
			[				
				'pensum' => 'Controllers',
				'video' => '2)symcontrolleren.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Database Config',
				'video' => '3)symdatabaseen.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Entity',
				'video' => '4)symentitysen.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Migrations',
				'video' => '5)symmigrationsen.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'CRUD Part 1',
				'video' => '6)symcrud1en.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'CRUD Part 2',
				'video' => '7)symcrud2en.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Integrate Bootstrap',
				'video' => '8)symboostrapen.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'DataTables',
				'video' => '9)symdatatablesen.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Auth Part 1',
				'video' => '10)symauth1en.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Auth Part 2',
				'video' => '11)symauth2.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Fixtures',
				'video' => '12)symfixturesen.mp4',
				'id_course' => 2								
			],					
		];

		$this->db->table('pensums')->insertBatch($data);
	}
}
