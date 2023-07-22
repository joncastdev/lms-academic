<?php

namespace App\Controllers;

use App\Traits\MiddlewareAuth;

use App\Libraries\Fpdf;

class Graduates extends BaseController
{

	use MiddlewareAuth;

	protected $session;

	protected $db;

	protected $pdf;

	public function __construct()
	{
		
		helper(['form', 'url']);

		$this->session = \Config\Services::session();

		$this->db = \Config\Database::connect();


	}

	public function index()
	{
		$data['tittle'] = 'Cursos de Programación - Graduados';

		// $query = "SELECT  DISTINCT u.img, u.first_name, u.last_name, c.name, u.linkedin  FROM users as u                     
		// left join users_courses as uc on u.id_user = uc.id_user
		// left join courses as c on c.id_course = uc.id_course		
		// where u.is_buyer = 1";


		// $query = "SELECT u.img, u.first_name, u.last_name,c.name, u.linkedin  FROM users as u                     
		// left join users_courses as uc on u.id_user = uc.id_user
		// left join courses as c on c.id_course = uc.id_course		
		// where u.is_buyer = 1 GROUP BY u.img, u.first_name,u.last_name, u.linkedin, c.name
		// ";

		// $query = "SELECT  DISTINCT u.id_user, u.img, u.first_name, u.last_name, u.linkedin FROM users as u                     
		// left join users_courses as uc on u.id_user = uc.id_user
		// left join courses as c on c.id_course = uc.id_course		
		// where u.is_buyer = 1 
		// ";

		// $query = "SELECT  DISTINCT u.id_user, u.img, u.first_name, u.last_name, u.linkedin
		// {
		// SELECT c.name FROM courses as c
		// } as cursos 
		// FROM users as u      
		// ";

		// subquerys
		// https://www.mysqltutorial.org/mysql-subquery/
		// https://sebhastian.com/mysql-operand-should-contain-1-column/

		$query = "SELECT * FROM users as u
		WHERE u.is_buyer = 1 
		 IN
		(SELECT * FROM courses as c);     
		";



		$result = $this->db->query($query);

		// total de users
		$data_users = $result->getResultObject();

		// $id_user = $data_users[0]->id_user; 

		// print_r($id_user);

		print_r($data_users);

		exit;

			// print_r(count($data_courses));

		$total_users = count($data_users);

		$data['users'] = $data_users;

		// $query2 = "SELECT c.name FROM users as u                     
		// left join users_courses as uc on u.id_user = uc.id_user
		// left join courses as c on c.id_course = uc.id_course		
		// where u.is_buyer = 1 
		// ";

		// $result2 = $this->db->query($query2);

		// // total de courses
		// $data_users2 = $result2->getResultObject();

		// $data['courses'] = $data_users2;


			// print_r($data_users2);

			// exit;

		// $data['users'] = $total_users;

		return view('graduates',$data);
	}


	
	
}
