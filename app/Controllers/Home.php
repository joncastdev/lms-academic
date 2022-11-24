<?php

namespace App\Controllers;

use App\Traits\MiddlewareAuth;

class Home extends BaseController
{

	use MiddlewareAuth;

	protected $session;

	public function __construct()
	{
		
		helper(['form', 'url']);

		$this->session = \Config\Services::session();


	}

	public function index()
	{
		$data['tittle'] = 'Programming Courses - Laravel Developer';

		return view('home',$data);
	}
	
	
}
