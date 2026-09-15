<?php namespace App\Controllers;

use App\Models\UserModel;

use App\Traits\MiddlewareAuth;

use CodeIgniter\API\ResponseTrait;

class Panel extends BaseController
{

	use MiddlewareAuth;

	use ResponseTrait;

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
		$data['tittle'] = 'Dashboard';

		$data['session'] = $this->session;

		$email = $this->session->get('email');

		// $query = "SELECT c.id_course FROM users as u                     
		// left join users_courses as uc on u.id_user = uc.id_user
		// left join courses as c on c.id_course = uc.id_course		
		// where u.email = '{$email}' and u.is_buyer = 1";

		$query = "SELECT c.id_course FROM users as u
		left join certificates as ce on ce.id_user = u.id_user                  
		left join courses as c on c.id_course = ce.id_course			
		where u.is_buyer = 1 and u.email = '{$email}'";



		// $query = "SELECT * FROM users as u                     
		// left join users_courses as uc on u.id_user = uc.id_user
		// left join courses as c on c.id_course = uc.id_course		
		// where u.email = '{$email}' and u.is_buyer = 1 or c.id_course = 1  or c.id_course = 2";

		$result = $this->db->query($query);

		$data_courses = $result->getResultObject();

			// print_r($data_courses);

			// print_r(count($data_courses));

		$total_courses = count($data_courses);

		$data['courses'] = $total_courses;

		// print_r($data_courses[0]->id_course);

		// $data['users_courses'] = $result->getResultObject();
		// $data['users_courses_val'] = $result->getRow();

		// $query2 = "SELECT ce.id_certificate FROM users as u                     
		// left join users_courses as uc on u.id_user = uc.id_user
		// left join courses as c on c.id_course = uc.id_course
		// right join certificates as ce on ce.id_course = c.id_course		
		// where u.is_buyer = 1 and u.email = '{$email}'";

		$query2 = "SELECT ce.id_certificate FROM users as u
		left join certificates as ce on ce.id_user = u.id_user                  
		left join courses as c on c.id_course = ce.id_course			
		where u.is_buyer = 1 and u.email = '{$email}'";
		

		$result2 = $this->db->query($query2);

		// $data['certificate_info'] = $result->getRow();

		$data_certificate = $result->getResult();

		// print_r($data_certificate);

		$total_certificate = count($data_certificate);

		$data['certificates'] = $total_certificate;


		return view('user/dashboard',$data);
	}

	public function profile()
	{
		$data['tittle'] = 'Profile';

		$data['session'] = $this->session;

		$email = $this->session->get('email');

		$query = "SELECT first_name,last_name,email FROM users as u			
		where u.email = '{$email}' and u.is_buyer = 1";



		// $query = "SELECT * FROM users as u                     
		// left join users_courses as uc on u.id_user = uc.id_user
		// left join courses as c on c.id_course = uc.id_course		
		// where u.email = '{$email}' and u.is_buyer = 1 or c.id_course = 1  or c.id_course = 2";

		$result = $this->db->query($query);

		$data['profile'] = $result->getResultObject();


		// $data['users_courses_val'] = $result->getRow();

		
		return view('user/profile',$data);
	}

	public function change(){

		$data['session'] = $this->session;

		$data['profile'] = $this->session->get('email');

		$rules = [		
			'password_new'    => [
				'rules'  => 'required|min_length[5]',
				'errors' => [
					'required' => 'New Password is required.'					
				]
			],
		];

		if (!$this->validate($rules))
		{
			$data['tittle'] = 'Profile';

			// $data['session'] = $this->session;

			$data["validation"] = $this->validator->listErrors();
			
			return view('user/profile',$data);


		}

		if ($this->request->getPost('password_new')) {

			
			// $password_old = $this->request->getPost('password_old');
			$password_new = $this->request->getPost('password_new');

			// $email = $this->request->getPost('email');

			$email = $this->session->get('email');
			
			// $temp_pass = rand();

			$change_password = password_hash($password_new,PASSWORD_BCRYPT);

			// $random_password = password_hash($email.rand(10,15),PASSWORD_BCRYPT);


			$query1 = "SELECT email FROM users					
			where email = '{$email}'";

			$result1 = $this->db->query($query1);

			$get_email = $result1->getRow();

			if ($get_email) {

				$query2 = "UPDATE users SET password = '{$change_password}'
				where email = '{$get_email->email}'";

				$result2 = $this->db->query($query2);

				// print_r($change_password);
				// exit;

				// $this->email_password($get_email->email,$temp_pass);

				$this->session->setFlashdata('password_change','New Password Set');

				return redirect()->to('/panel/profile');


			}

			return redirect()->to('/panel');

		// $password = $this->request->getPost('password');
		// $password = $this->request->getPost('password');

		// $hash = password_hash($password,PASSWORD_BCRYPT);			

		// $random_token = password_hash($email.rand(10,100),PASSWORD_BCRYPT);		



		}

	}

	public function certificateUsers()
	{

		$data['tittle'] = 'Certificados';

		$data['session'] = $this->session;

		$email = $this->session->get('email');

		// $query = "SELECT ce.id_certificate, ce.created_at, u.first_name, u.last_name, c.name FROM users as u                     
		// left join users_courses as uc on u.id_user = uc.id_user
		// left join courses as c on c.id_course = uc.id_course
		// right join certificates as ce on ce.id_course = c.id_course		
		// where u.is_buyer = 1 and u.email = '{$email}'";

		$query = "SELECT ce.id_certificate, ce.created_at, u.first_name, u.last_name, c.name FROM users as u
		left join certificates as ce on ce.id_user = u.id_user                  
		left join courses as c on c.id_course = ce.id_course			
		where u.is_buyer = 1 and u.email = '{$email}'";
		

		$result = $this->db->query($query);

		// $data['certificate_info'] = $result->getRow();

		$data['certificates'] = $result->getResult();

		// print_r($data);

		// $total_certificate = count($data_certificate);

		// $data['certificates'] = $total_certificate;


		return view('user/certificate',$data);

	}

	public function info()
	{
		$data['tittle'] = 'Profile';

		$data['session'] = $this->session;

		$email = $this->session->get('email');

		$query = "SELECT first_name,last_name,email,id_country,linkedin FROM users as u			
		where u.email = '{$email}' and u.is_buyer = 1";



		// $query = "SELECT * FROM users as u                     
		// left join users_courses as uc on u.id_user = uc.id_user
		// left join courses as c on c.id_course = uc.id_course		
		// where u.email = '{$email}' and u.is_buyer = 1 or c.id_course = 1  or c.id_course = 2";

		$result = $this->db->query($query);

		$data['profile'] = $result->getResultObject();


		// $data['users_courses_val'] = $result->getRow();

		
		return view('user/info',$data);
	}

	public function changeinfo(){

		$data['session'] = $this->session;

		// $data['profile'] = $this->session->get('email');

		$email = $this->session->get('email');

		$query = "SELECT first_name,last_name,email,id_country,linkedin FROM users as u			
		where u.email = '{$email}' and u.is_buyer = 1";



		// $query = "SELECT * FROM users as u                     
		// left join users_courses as uc on u.id_user = uc.id_user
		// left join courses as c on c.id_course = uc.id_course		
		// where u.email = '{$email}' and u.is_buyer = 1 or c.id_course = 1  or c.id_course = 2";

		$result = $this->db->query($query);

		$data['profile'] = $result->getResultObject();

		$rules = [
			'first_name' => [
				'rules'  => 'required|min_length[3]',
				'errors' => [
					'required' => 'FirstName is required.'
				]
			],
			'last_name' => [
				'rules'  => 'required|min_length[3]',
				'errors' => [
					'required' => 'LastName is required.'
				]
			],
			'country' => [
				'rules'  => 'required',
				'errors' => [
					'required' => 'Country is required.'
				]
			],
			'linkedin'    => [
				'rules'  => 'required',
				'errors' => [
					'required' => 'LinkedIn Url is required.'					
				]
			],
		];


		if (!$this->validate($rules))
		{
			$data['tittle'] = 'Info';

			// $data['session'] = $this->session;

			$data["validation"] = $this->validator->listErrors();
			
			return view('user/info',$data);


		}

		if ($this->request->getPost('first_name') && $this->request->getPost('last_name') && $this->request->getPost('country') && $this->request->getPost('linkedin')) {

			$firstName = $this->request->getPost('first_name');
			$lastName = $this->request->getPost('last_name');
			$country = $this->request->getPost('country');
			$linkedin = $this->request->getPost('linkedin');

			
			// $password_old = $this->request->getPost('password_old');
			// $password_new = $this->request->getPost('password_new');

			// $email = $this->request->getPost('email');

			$email = $this->session->get('email');
			
			// $temp_pass = rand();

			// $change_password = password_hash($password_new,PASSWORD_BCRYPT);

			// $random_password = password_hash($email.rand(10,15),PASSWORD_BCRYPT);


			$query1 = "SELECT email FROM users					
			where email = '{$email}'";

			$result1 = $this->db->query($query1);

			$get_email = $result1->getRow();

			if ($get_email) {

				$query2 = "UPDATE users SET first_name = '{$firstName}',last_name = '{$lastName}',id_country = '{$country}',linkedin = '{$linkedin}'
				where email = '{$get_email->email}'";

				$result2 = $this->db->query($query2);

				// print_r($change_password);
				// exit;

				// $this->email_password($get_email->email,$temp_pass);

				$this->session->setFlashdata('password_change','Info Change');

				return redirect()->to('/panel/info');


			}

			return redirect()->to('/panel');

		// $password = $this->request->getPost('password');
		// $password = $this->request->getPost('password');

		// $hash = password_hash($password,PASSWORD_BCRYPT);			

		// $random_token = password_hash($email.rand(10,100),PASSWORD_BCRYPT);		



		}

	}

	public function countrys()
	{

		$query = "SELECT id_country,country FROM countrys 
		";

		$result = $this->db->query($query);

		$data = $result->getResultArray();

		
		// return $this->response->setJSON("test");
		// return $this->response->setJSON($data);

		return $this->respond($data)
		->setHeader('Access-Control-Allow-Origin', '*');  
	}



}
