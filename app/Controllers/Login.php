<?php namespace App\Controllers;

use App\Models\UserModel;


use App\Traits\Auth;

// use Google_Service;

// use Google\Client;

use Google_Client;

use Google_Service_Oauth2;

class Login extends BaseController
{
	
	use Auth;

	protected $UserModel;

	protected $request;

	protected $session;

	protected $validation;


	protected $db;

	protected $client;
	

	public function __construct()
	{

		$this->db = \Config\Database::connect();	

		$this->UserModel = new UserModel();

		// helper('form');

		helper(['form', 'url']);

		$this->request = \Config\Services::request();

		$this->session = \Config\Services::session();

		$this->validation =  \Config\Services::validation();

		// $this->security = \Config\Services::security();

		// $this->client = new Google_Client();

		// print_r($this->client);

		// exit;

		// $clientID = getenv('GOOGLE_ID_CLIENT');
		// $clientSecret = getenv('GOOGLE_KEY');		
		// $redirectUri = 'http://localhost:8080/';

		
		// $this->client->setClientId($clientID);
		// $this->client->setClientSecret($clientSecret);
		// $this->client->setRedirectUri($redirectUri);
		// $this->client->addScope("email");
		// $this->client->addScope("profile");


	}

	public function index()
	{
		$data['tittle'] = 'Login';

		$data['session'] = $this->session;

		// $this->session->setFlashdata('no_valid_email','Email not registered');

		return view('login',$data);
	}	


	public function sign()
	{

		// $data['session'] = $this->session;		

		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');



		$rules = [
			'password' => [
				'rules'  => 'required',
				'errors' => [
					'required' => 'Password is required.'
				]
			],
			'email'    => [
				'rules'  => 'required|valid_email',
				'errors' => [
					'required' => 'Email is required.',
					'valid_email' => 'Verify email.'
				]
			],
		];





		if (!$this->validate($rules))
		{


			// $data = $this->validator->listErrors();



			// return $data;

			$data['tittle'] = 'Login';

			$data['session'] = $this->session;

			$data["validation"] = $this->validator->listErrors();
			
			return view('login',$data);




		}else{



			if ($this->checkUser($email,$password)) {



				$this->setSession($email);



				if ($this->session->get('id_role') == 1) {

					return redirect()->to('/dashboard');

				}

				if ($this->session->get('id_role') == 2) {


					return redirect()->to('/panel');
				}



			}else{

				$data['tittle'] = 'Login';

				$data['session'] = $this->session;	

				// $this->session->setFlashdata('no_valid_email','Something is wrong');

				$this->session->setFlashdata('no_valid_email','Incorrect password');

				return view('login',$data);

				// $this->index();

			// throw new \CodeIgniter\Router\Exceptions\RedirectException('/');

			}



		}  



	}


	public function out()
	{

	// $email = getenv('EMAIL_ADMIN');

	// $query = "DELETE FROM users where email !='{$email}'";


	// $result = $this->db->query($query);



	// if ($result) {

		$this->session->destroy();

		// print_r($this->session->get());

		return redirect()->to('/');

	// }		


	}

	public function register()
	{



		$data['tittle'] = 'Register';

		$data['session'] = $this->session;

		// $rules = [
		// 	'password' => [
		// 		'rules'  => 'required',
		// 		'errors' => [
		// 			'required' => 'Password is required.'
		// 		]
		// 	],
		// 	'email'    => [
		// 		'rules'  => 'required|valid_email',
		// 		'errors' => [
		// 			'required' => 'Email is required.',
		// 			'valid_email' => 'Verify email.'
		// 		]
		// 	],
		// ];

		// if (!$this->validate($rules))
		// {


		// 	// $data = $this->validator->listErrors();

		// 	// $data=array(		
		// 	// 	'errors' => listErrors()
		// 	// );

		// 	$data["validation"] = $this->validator->listErrors();




		// 	// return $data;

		// 	return view('register',$data);





		// }



		return view('register',$data);


	}

	public function create()
	{



		// $first_name = $this->request->getPost('first_name');
		// $last_name = $this->request->getPost('last_name');

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
			'password' => [
				'rules'  => 'required|min_length[5]',
				'errors' => [
					'required' => 'Password is required.'
				]
			],
			'email'    => [
				'rules'  => 'required|valid_email',
				'errors' => [
					'required' => 'Email is required.',
					'valid_email' => 'Verify email.'
				]
			],
		];

		if (!$this->validate($rules))
		{
			$data['tittle'] = 'Register';

			$data['session'] = $this->session;

			$data["validation"] = $this->validator->listErrors();
			
			return view('register',$data);


		}





		if ($this->request->getPost('email') && $this->request->getPost('password') && $this->request->getPost('first_name') && $this->request->getPost('last_name') ) {
			# code...
			$firstName = $this->request->getPost('first_name');
			$lastName = $this->request->getPost('last_name');
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');

			$hash = password_hash($password,PASSWORD_BCRYPT);
			

			// $random_token = csrf_hash().rand(10,100);

			$random_token = password_hash($email.rand(10,100),PASSWORD_BCRYPT);



		// $created_at = date('y-m-d');

		// $updated_at = date('y-m-d');

		// $deleted_at = date('y-m-d');	


			$data = array(
				'img' => 'user.png',
				'first_name' => $firstName,	
				'last_name' => $lastName,		
				'email' => $email,
				'password' => $hash,
				'token' => $random_token,			
				'id_role' => 2,
				'id_statu' => 2,
				'is_buyer' => 0				
			);


			if ($this->UserModel->save($data) == false) {


				$data['tittle'] = 'Register';

				$data['session'] = $this->session;

				// el flashdata omite estos errores del modelo
				$data['errors'] = $this->UserModel->errors();

				// $this->session->setFlashdata('create','Register success');

				return view('register',$data);

			}else{

				$data['tittle'] = 'Register';

				$data['session'] = $this->session;

				$this->email_verification($email,$random_token);


				// $data['errors'] = $this->UserModel->errors();

				$this->session->setFlashdata('create','Success');

				return view('register',$data);


			}

		}

		// esta condicion no se aplica actualmente por el form validation del front
		$data['tittle'] = 'Register';

		$data['session'] = $this->session;


		$this->session->setFlashdata('create','Email and password cannot be empty');

		// return redirect()->to('/register');

		return view('register',$data);


	}

	public function email_verification($email_user,$random_token)
	{

		$email = \Config\Services::email();

		$email->setFrom('contact@laravel-developer.com', 'Bot Academy');
		$email->setTo($email_user);
		// $email->setCC('another@another-example.com');
		// $email->setBCC('them@their-example.com');

		$email->setSubject('Verification Email');
		// $email->setMessage($email_user.$random_token);

		// $activation = base_url('/activation/');

		$email->setMessage('Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get started using your Website account. <br/> <br/> <a href="'.base_url().'/activation'. '?token=' . $random_token.'">'.'</a>');	


		
		
		// $email->setMessage(<a href="'.$base_url.'activation/'.$activation.'">'.$base_url.'activation/'.$activation.'</a>);

		$email->send();

	}

	public function activation()
	{
		


		if (!empty($_GET['token']) && isset($_GET['token'])) {

			$token = $_GET['token'];
			
			$query1 = "SELECT email FROM users					
			where token = '{$token}' and id_statu = 2";

			$result1 = $this->db->query($query1);

			$get_email = $result1->getRow();

			// var_dump($get_email->email);

			$query2 = "UPDATE users SET id_statu = 1
			where email = '{$get_email->email}'";

			$result2 = $this->db->query($query2);

			$data['tittle'] = 'Activation';

			return view('msg_activation',$data);

		}else{

			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
		

	}


	public function recover_password()
	{


		$data['tittle'] = 'Recover Password';

		$data['session'] = $this->session;


		return view('recover_password',$data);


	}



	public function recover_action()
	{

		$rules = [			
			'email'    => [
				'rules'  => 'required|valid_email',
				'errors' => [
					'required' => 'Email is required.',
					'valid_email' => 'Verify email.'
				]
			],
		];

		if (!$this->validate($rules))
		{
			$data['tittle'] = 'Recover Password';

			$data['session'] = $this->session;

			$data["validation"] = $this->validator->listErrors();
			
			return view('recover_password',$data);


		}



		if ($this->request->getPost('email') ) {
			# code...

			$email = $this->request->getPost('email');	
			
			$temp_pass = rand();

			$random_password = password_hash($temp_pass,PASSWORD_BCRYPT);

			// $random_password = password_hash($email.rand(10,15),PASSWORD_BCRYPT);


			$query1 = "SELECT email FROM users					
			where email = '{$email}'";

			$result1 = $this->db->query($query1);

			$get_email = $result1->getRow();

			if ($get_email) {

				$query2 = "UPDATE users SET password = '{$random_password}'
				where email = '{$get_email->email}'";

				$result2 = $this->db->query($query2);

				$this->email_password($get_email->email,$temp_pass);

				return redirect()->to('/login');

			}else{

				throw new \Exception('Unregistered email');
			}

					


		}		

		

	}


	public function email_password($emailuser, $random_password)
	{

		$email = \Config\Services::email();

		$email->setFrom('contact@laravel-developer.com', 'Bot Academy');
		$email->setTo($emailuser);
		

		$email->setSubject('Recover Password');		

		$email->setMessage('Hello your temporary password is:'.$random_password);	
		

		$email->send();



	}


}
