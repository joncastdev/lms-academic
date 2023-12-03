<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LoadSeeder extends Seeder
{
    public function run()
    {       
		$this->call('CourseSeeder');
		$this->call('PensumSeeder');		
		$this->call('RoleSeeder');		
		$this->call('PriceSeeder');		
		$this->call('UserSeeder');
		$this->call('StatuSeeder');
		$this->call('UserCourseSeeder');

		$this->call('ExamSeeder');
		$this->call('QuestionSeeder');
		$this->call('AmswerSeeder');
    }
}
