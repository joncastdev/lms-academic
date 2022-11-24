<?php

namespace App\Traits;

trait MiddlewareAuth
{
	// public function test()
	// {
		
	// 	echo "test";

	// }

	public function checkAdmin()	
	{

		if ($this->session->get('id_role') == 2 || $this->session->get('id_role') == null ) {				
			
			throw new \CodeIgniter\Router\Exceptions\RedirectException('/');

						
		}



	}

	public function checkUser()	
	{		

		if ($this->session->get('id_role') == 1 || $this->session->get('id_role') == null ) {				

		
			throw new \CodeIgniter\Router\Exceptions\RedirectException('/');

			
		}


	}

	public function checkAdminUser()	
	{		

		if ($this->session->get('id_role') == null ) {	

			

			throw new \CodeIgniter\Router\Exceptions\RedirectException('/');

			
		}


	}

	// public function checkDemoTime()	
	// {		

	// 	if ($this->session->get('id_role') == null ) {				

	// 		$db      = \Config\Database::connect();

	// 		$query = "DELETE FROM leads where id_lead > 3";

	// 		$result = $db->query($query);

	// 		$query2 = "DELETE FROM users_leads where id_lead > 3";

	// 		$result2 = $db->query($query2);

			
	// 	}


	// }			

	
}