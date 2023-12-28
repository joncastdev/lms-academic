<?php namespace App\Controllers;


use App\Models\UserModel;

use App\Traits\MiddlewareAuth;

class Users extends BaseController
{

	use MiddlewareAuth;

	protected $UserModel;

	protected $request;

	protected $session;

	protected $db;


	public function __construct()
	{

		$this->db = \Config\Database::connect();

		$this->UserModel = new UserModel();

		helper('form');		

		$this->request = \Config\Services::request();

		$this->session = \Config\Services::session();

		$this->checkAdmin();		


	}


	public function index()
	{
		$data['session'] = $this->session;
		
		$data['tittle'] = 'Users';

		// $data['users'] = $this->UserModel->findAll();

		$query = "SELECT * FROM users where id_statu=1";

		
		$result = $this->db->query($query);

		$data['users'] = $result->getResultObject();	

		return view('admin/index',$data);
	}

	public function email_promo_users()
	{

		$query = "SELECT * FROM users where id_statu=1";

		
		$result = $this->db->query($query);

		// $data['users'] = $result->getResultObject();

		$users = $result->getResultObject();

		// print_r($data['users']);

		// exit;	

		$email = \Config\Services::email();

		// $email->setFrom('tutoriales@cursosprogramaciongratis.online', 'Jonathan Castro');

		foreach ($users as $user) {

				$email->setFrom('tutoriales@cursosprogramaciongratis.online', 'Jonathan Castro');

			$email->setTo($user->email);

			$email->setSubject('Nuevo Tutorial y Novedades');
		// $email->setMessage($email_user.$random_token);

		// $activation = base_url('/activation/');

		// $email->setMessage('Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get started using your Website account. <br/> <br/> <a href="'.base_url().'/activation'. '?token=' . $random_token.'">'.'</a>');
		$video_url_tutorial = 'https://www.youtube.com/watch?v=cuwo2iIX2wI&ab_channel=PHPDesdeCero';

		$video_url_promo = 'https://www.udemy.com/course/master-en-frameworks-php-laravel-codeigniter-symfony/?couponCode=PHPDESDECERO';

		$email->setMessage('Hola estimado Usuario, tenemos un nuevo Curso / Tutorial en nuestro canal de Youtube:'.$video_url_tutorial.'Y una oferta especial por tiempo limitado:'.$video_url_promo);		

		$email->send();

		}
		// $email->setTo($data['users']);
		// $email->setCC('another@another-example.com');
		// $email->setBCC('them@their-example.com');

			return redirect()->to('/users');

		

	}

	public function email_promo_guest()
	{

		$query = "SELECT * FROM guests";

		
		$result = $this->db->query($query);

		

		$users = $result->getResultObject();

		

		$email = \Config\Services::email();

	

		foreach ($users as $user) {

				$email->setFrom('tutoriales@cursosprogramaciongratis.online', 'Jonathan Castro');

			$email->setTo($user->email);

			$email->setSubject('Nuevo Tutorial y Novedades');
		
		$video_url_tutorial = 'https://www.youtube.com/watch?v=gOA1GoLDAgk&ab_channel=PHPDesdeCero';

		$video_url_promo = 'https://www.udemy.com/course/master-en-frameworks-php-laravel-codeigniter-symfony/?couponCode=PHPDESDECERO';

		$email->setMessage('Hola estimado Usuario, tenemos un nuevo Curso / Tutorial en nuestro canal de Youtube:'.$video_url_tutorial.'Y una oferta especial por tiempo limitado:'.$video_url_promo);		

		$email->send();

		}
		

		return redirect()->to('/users');

	}

	

	public function new()
	{
		$data['session'] = $this->session;

		$data['tittle'] = 'New';

		$data['users'] = $this->UserModel->findAll();

		return view('admin/new',$data);
		
	}

	public function create()
	{

		if ($this->request->isAJAX())
		{
            // echo json_encode('df');

			$first_name = $this->request->getPost('first_name');
			$last_name = $this->request->getPost('last_name');
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');

			$hash = password_hash($password,PASSWORD_BCRYPT);

			$country = $this->request->getPost('country');
			$state = $this->request->getPost('state');


			$data = array(
				'img' => 'user.png',
				'first_name' => $first_name,
				'last_name' => $last_name,
				'email' => $email,
				'password' => $hash,
				'id_country' => $country,
				'id_state' => $state
			);


			if ($this->UserModel->save($data) == false) {

				$errors = $this->UserModel->errors();


				return $this->response->setJSON($errors);

			}


			$data=array(		
				'msg_success' => "Register success"
			);		

			return $this->response->setJSON($data);


		}		
		
	}

	public function show($id)
	{

		$query = "UPDATE users SET is_buyer = 0
		where id_user = '{$id}'";

		
		$result = $this->db->query($query);

		// $data = $result->getResultObject();	


		// return $this->response->setJSON($data);

		return redirect()->to('/users');	

		// $data['session'] = $this->session;	

		// $data['tittle'] = 'Show';

		// $data['users'] = $this->UserModel->find($id);		

		// return view('admin/show',$data);
		
	}

	public function edit($id)
	{

		$query = "UPDATE users SET is_buyer = 1
		where id_user = '{$id}'";

		
		$result = $this->db->query($query);		

		return redirect()->to('/users');
		
		// $data['session'] = $this->session;	
		
		// $data['tittle'] = 'Edit';

		// $data['users'] = $this->UserModel->find($id);

		// return view('admin/edit',$data);
		
	}

	public function update($id)
	{

		$data = $this->request->getPost();

		$this->UserModel->update($id,$data);
		

		$data=array(		
			'user' => "Update success"
		);

		return $this->response->setJSON($data);		

		
	}

	public function delete($id)
	{
		if ($id == 1) {

			$data=array(		
				'user' => "Guest cannot be deleted"
			);

		}else {

			$this->UserModel->delete($id);

			$data=array(		
				'user' => "Delete success"
			);

		}		

		return $this->response->setJSON($data);	
		
		
	}


	public function table()
	{

		$data = $this->UserModel->findAll();	


		return $this->response->setJSON($data);
		
	}


	public function total()
	{		

		$db      = \Config\Database::connect();
		$builder = $db->table('users');
		$builder->select('COUNT(id_user) AS totalUsers');
		$query = $builder->get()->getResult();			


		return $this->response->setJSON($query);
		
	}

	public function orders()
	{
		$data['session'] = $this->session;
		
		$data['tittle'] = 'Orders';

		// $data['orders'] = $this->UserModel->findAll();

		return view('admin/orders',$data);
	}

	public function orders_table()
	{
		$query = "SELECT * FROM orders";

		
		$result = $this->db->query($query);

		$data = $result->getResultObject();	


		return $this->response->setJSON($data);
	}


}
