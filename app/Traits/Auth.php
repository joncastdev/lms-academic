<?php

namespace App\Traits;

trait Auth
{
	// public function test()
 //    {

 //    	echo "test";

 //    }

	public function checkUser($email, $password)	
	{	

		$hash = $this->UserModel->where('email',$email)
		->findColumn('password');

		// return $this->verifyHash($password,$hash[0]);

		if ($hash !== null) {

			// print_r($hash);
			// exit;

			return $this->verifyHash($password,$hash[0]);

		}else{

			 // throw new Exception('This email is not registered');

			 throw new \Exception('This email is not registered');

			// throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();

			// throw new \CodeIgniter\Router\Exceptions\RedirectException('/');
		}


	}

	//  public function checkUserGoogle($email)	
	// {	

	// 	$validEmail = $this->UserModel->where('email',$email)
	// 	->findColumn('email');

	// 	return $validEmail;


	// }


	public function verifyHash($password,$hash )
	{
		return password_verify($password,$hash);

	}


	public function setSession($email)
	{		

		$data = $this->UserModel->where('email',$email)
		->findAll();

		$data=array(
			'id_user' => $data[0]->id_user,				
			'email' => $data[0]->email,
			'id_statu' => $data[0]->id_statu,			
			'id_role' => $data[0]->id_role,
			'is_buyer' => $data[0]->is_buyer									
		);	
		

		return $this->session->set($data);

	}
}