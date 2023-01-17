<?php

namespace App\Controllers;

use App\Traits\MiddlewareAuth;

class Home extends BaseController
{

	use MiddlewareAuth;

	protected $session;

	protected $db;

	public function __construct()
	{
		
		helper(['form', 'url']);

		$this->session = \Config\Services::session();

		$this->db = \Config\Database::connect();


	}

	public function index()
	{
		$data['tittle'] = 'Cursos de Programación - OpenGisCRM';

		$query1 = "SELECT * FROM courses as c 
		left join prices as p on c.id_price = p.id_price
		";

		$result1 = $this->db->query($query1);

		$data['all_courses'] = $result1->getResultObject();

		return view('home',$data);
	}

	public function show($id)
	{		

		$data['tittle'] = 'Courses View';

		$data['session'] = $this->session;

		// $email = $this->session->get('email');

		$query = "SELECT * FROM users as u                     
		left join users_courses as uc on u.id_user = uc.id_user
		left join courses as c on c.id_course = uc.id_course
		left join pensums as p on p.id_course = c.id_course		
		where p.id_course = '{$id}'";

		$result = $this->db->query($query);

		$data['courses_pensum'] = $result->getResultObject();			

		return view('courses_all',$data);		

		
	}

	public function videos($id)
	{		

		$data['tittle'] = 'Courses Videos';

		$data['session'] = $this->session;	

		// $email = $this->session->get('email');

		$query = "SELECT * FROM users as u                     
		left join users_courses as uc on u.id_user = uc.id_user
		left join courses as c on c.id_course = uc.id_course
		left join pensums as p on p.id_course = c.id_course		
		where p.id_pensum = '{$id}'";

		$result = $this->db->query($query);

		$data['courses_pensum'] = $result->getResultObject();
			

		return view('videos_all',$data);		

		
	}
	
	
}
