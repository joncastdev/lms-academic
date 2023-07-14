<?php

namespace App\Controllers;

use App\Traits\MiddlewareAuth;

class Certificates extends BaseController
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
		$data['tittle'] = 'Cursos de Programación - Certificados';

		// $query1 = "SELECT * FROM courses as c 
		// left join prices as p on c.id_price = p.id_price
		// ";

		// $result1 = $this->db->query($query1);

		// $data['all_courses'] = $result1->getResultObject();

		return view('certificates',$data);
	}

	public function number()
	{		

		$data['tittle'] = 'Courses View';

		$cert_number = $this->request->getGet('certificate');

		// print_r($cert_number);

		// exit;

		// $data['session'] = $this->session;

		// $email = $this->session->get('email');

		// en este ejemplo hay que usar right join es un join diferente
		$query = "SELECT * FROM users as u                     
		left join users_courses as uc on u.id_user = uc.id_user
		left join courses as c on c.id_course = uc.id_course
		right join certificates as ce on ce.id_course = c.id_course		
		where u.is_buyer = 1 and ce.id_certificate = '{$cert_number}'";

		// con left join no acepta la ultima tabla
		// $query = "SELECT * FROM certificates as c                     
		//  left join users_courses as uc on u.id_user = uc.id_user
		//  left join courses as c on c.id_course = uc.id_course
		//  left join certificates as ce on ce.id_course = c.id_course		
		// ";

		$result = $this->db->query($query);

		// $data['certificate_info'] = $result->getRow();

		$data['certificate_info'] = $result->getResult();

		// print_r($data);

		// exit;			

		return view('number',$data);		

		
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
