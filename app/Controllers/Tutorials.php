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


		return view('user/tutorials/index',$data);
	}


		

	}
