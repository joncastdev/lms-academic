<?php namespace App\Controllers;

use App\Models\UserModel;

use App\Traits\MiddlewareAuth;

class Panel extends BaseController
{

	use MiddlewareAuth;

	public function __construct()
	{

		$this->UserModel = new UserModel();

		helper('form');

		$this->request = \Config\Services::request();

		$this->session = \Config\Services::session();

		$this->checkUser();

	}

	public function index()
	{
		$data['tittle'] = 'Dashboard';

		$data['session'] = $this->session;

		return view('user/dashboard',$data);
	}	

}
