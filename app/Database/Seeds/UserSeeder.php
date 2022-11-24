<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{

		$email_admin = getenv('EMAIL_ADMIN');

		$email_user = getenv('EMAIL_USER');

		$img = 'user.png';

		$password = password_hash('Test1234',PASSWORD_BCRYPT);

		// $random_token = csrf_hash().rand(10,100);

		$random_token_admin = $password.rand(10,100);

		$random_token_user = $password.rand(10,50);				

		$data = [
			[
				'img' => $img,			
				'email' => $email_admin,
				'password' => $password,
				'token' => $random_token_admin,			
				'id_statu' => 1,
				'id_role' => 1,
				'is_buyer' => 1
			],
			[
				'img' => 'user.png',			
				'email' => $email_user,
				'password' => $password,
				'token' => $random_token_user,			
				'id_statu' => 1,
				'id_role' => 2,
				'is_buyer' => 1
			],			
		];
		
		

		$this->db->table('users')->insertBatch($data);
	}
}
