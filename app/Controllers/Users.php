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

		$data['users'] = $this->UserModel->findAll();

		return view('admin/index',$data);
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
