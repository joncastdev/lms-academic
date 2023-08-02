<?php namespace App\Controllers;

use App\Models\UserModel;

use App\Traits\MiddlewareAuth;

class Tutorials extends BaseController
{

	use MiddlewareAuth;

	protected $db;

	protected $validation;

	public function __construct()
	{

		$this->db = \Config\Database::connect();

		$this->UserModel = new UserModel();

		helper('form');

		$this->request = \Config\Services::request();

		$this->session = \Config\Services::session();

		$this->validation =  \Config\Services::validation();

		$this->checkUser();

	}

	public function index()
	{
		$data['tittle'] = 'Tutorials';

		$data['session'] = $this->session;

		$email = $this->session->get('email');

		$query1 = "SELECT * FROM tutorials";

		$result1 = $this->db->query($query1);

		$data['all_tutorials'] = $result1->getResultObject();		


		return view('user/tutorials/index',$data);
	}

	public function show($id)
	{		

		$data['tittle'] = 'Tutorials View';

		$data['session'] = $this->session;


		$email = $this->session->get('email');

		$query = "SELECT name, tutorial FROM tutorials 			
		where id_tutorial = '{$id}'";

		$result = $this->db->query($query);

		$data['tutorials_pensum'] = $result->getResultObject();
			

		return view('user/tutorials/show',$data);		

		
	}


		

	}
