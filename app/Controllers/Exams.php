<?php namespace App\Controllers;

use App\Models\UserModel;

use App\Models\CourseModel;

use App\Traits\MiddlewareAuth;

class Exams extends BaseController
{

	use MiddlewareAuth;

	protected $CourseModel;

	protected $db;

	public function __construct()
	{

		$this->db = \Config\Database::connect();

		$this->UserModel = new UserModel();

		$this->CourseModel = new CourseModel();

		helper('form');

		$this->request = \Config\Services::request();

		$this->session = \Config\Services::session();

		// $this->checkUser();

	}

	public function index()
	{
		$data['tittle'] = 'Test de CodeIgniter';
		

		return view('exam_ci4',$data);
	}

	public function start()
	{



		// $first_name = $this->request->getPost('first_name');
		// $last_name = $this->request->getPost('last_name');

		$rules = [
			'first_name'    => [
				'rules'  => 'required',
				'errors' => [
					'required' => 'FirstName is required.'
					
				]
			],
			'last_name'    => [
				'rules'  => 'required',
				'errors' => [
					'required' => 'LastName is required.'
					
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
			$data['tittle'] = 'Test de CodeIgniter';

			$data['session'] = $this->session;

			$data["validation"] = $this->validator->listErrors();
			
			return view('exam_ci4',$data);


		}

		$data=array(
			'email_guest' => $this->request->getPost('email'),
			'first_name_guest' => $this->request->getPost('first_name'),
			'last_name_guest' => $this->request->getPost('last_name')					
			// 'email' => $data[0]->email,
			// 'id_statu' => $data[0]->id_statu,			
			// 'id_role' => $data[0]->id_role,
			// 'is_buyer' => $data[0]->is_buyer									
		);	
		

		$this->session->set($data);

		return redirect()->to('/questions');

	}

	public function question()
	{
		$data['tittle'] = 'Test de CodeIgniter';

		$email = $this->session->get('email_guest');

		// print_r($email);

		$query = "SELECT id_question,question FROM questions where id_question = 1";

		$result = $this->db->query($query);

		$data['questions'] = $result->getResultObject();

		 // print_r($data['questions']);

		$query1 = "SELECT id_amswer,amswer FROM amswer";

		$result1 = $this->db->query($query1);

		$data['amswer'] = $result1->getResultObject();

			 // print_r($data['questions']);

		$query2 = "SELECT id_question,question FROM questions where id_question = 2";

		$result2 = $this->db->query($query2);

		$data['questions2'] = $result2->getResultObject();

		 // print_r($data['questions']);

		$query3 = "SELECT id_question,question FROM questions where id_question = 3";

		$result3 = $this->db->query($query3);

		$data['questions3'] = $result3->getResultObject();

		 // print_r($data['questions']);

		$query4 = "SELECT id_question,question FROM questions where id_question = 4";

		$result4 = $this->db->query($query4);

		$data['questions4'] = $result4->getResultObject();

		 // print_r($data['questions']);

		$query5 = "SELECT id_question,question FROM questions where id_question = 5";

		$result5 = $this->db->query($query5);

		$data['questions5'] = $result5->getResultObject();

		 // print_r($data['questions']);

		$query6 = "SELECT id_question,question FROM questions where id_question = 6";

		$result6 = $this->db->query($query6);

		$data['questions6'] = $result6->getResultObject();

		 // print_r($data['questions']);

		$query7 = "SELECT id_question,question FROM questions where id_question = 7";

		$result7 = $this->db->query($query7);

		$data['questions7'] = $result7->getResultObject();

		 // print_r($data['questions']);


		$query8 = "SELECT id_question,question FROM questions where id_question = 8";

		$result8 = $this->db->query($query8);

		$data['questions8'] = $result8->getResultObject();

		 // print_r($data['questions']);

		$query9 = "SELECT id_question,question FROM questions where id_question = 9";

		$result9 = $this->db->query($query9);

		$data['questions9'] = $result9->getResultObject();

		 // print_r($data['questions']);

		$query10 = "SELECT id_question,question FROM questions where id_question = 10";

		$result10 = $this->db->query($query10);

		$data['questions10'] = $result10->getResultObject();

		 // print_r($data['questions']);

		

		return view('question_ci4',$data);
	}

	public function evaluation()
	{



		// $first_name = $this->request->getPost('first_name');
		// $last_name = $this->request->getPost('last_name');

		// $rules = [
		// 'first_name'    => [
		// 		'rules'  => 'required',
		// 		'errors' => [
		// 			'required' => 'FirstName is required.'

		// 		]
		// 	],
		// 	'last_name'    => [
		// 		'rules'  => 'required',
		// 		'errors' => [
		// 			'required' => 'LastName is required.'

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
		// 	$data['tittle'] = 'Test de CodeIgniter';

		// 	$data['session'] = $this->session;

		// 	$data["validation"] = $this->validator->listErrors();

		// 	return view('exam_ci4',$data);


		// }

		// $data=array(
		// 	'email_guest' => $this->request->getPost('email'),
		// 	'first_name_guest' => $this->request->getPost('first_name'),
		// 	'last_name_guest' => $this->request->getPost('last_name')					
		// 	// 'email' => $data[0]->email,
		// 	// 'id_statu' => $data[0]->id_statu,			
		// 	// 'id_role' => $data[0]->id_role,
		// 	// 'is_buyer' => $data[0]->is_buyer									
		// );

		$question1 = $this->request->getPost('question1');
		$question2 = $this->request->getPost('question2');
		$question3 = $this->request->getPost('question3');
		$question4 = $this->request->getPost('question4');
		$question5 = $this->request->getPost('question5');
		$question6 = $this->request->getPost('question6');
		$question7 = $this->request->getPost('question7');
		$question8 = $this->request->getPost('question8');
		$question9 = $this->request->getPost('question9');
		$question10 = $this->request->getPost('question10');

		$query = "SELECT * FROM questions as q                     
		left join amswer as a on q.id_amswer = a.id_amswer
		-- left join courses as c on c.id_course = uc.id_course		
		where a.id_amswer = '{$question1}' or a.id_amswer = '{$question2}'
		or a.id_amswer = '{$question3}'  or a.id_amswer = '{$question4}'
		or a.id_amswer = '{$question5}'  or a.id_amswer = '{$question6}'
		or a.id_amswer = '{$question7}'  or a.id_amswer = '{$question8}'
		or a.id_amswer = '{$question9}'  or a.id_amswer = '{$question10}'
		";
		

		$result = $this->db->query($query);

		$data = $result->getResultObject();

		// print_r($data);

		$total = count($data);

		// print_r($total);

		if ($total >= 7) {

			$email = $this->session->get('email_guest');
			$firstName = $this->session->get('first_name_guest');
			$lastName = $this->session->get('last_name_guest');

			$query1= "INSERT INTO guests(first_name,last_name,email) VALUES ('{$firstName}','{$lastName}','{$email}')";

		
		$result1 = $this->db->query($query1);


		$query2 = "SELECT id_guest FROM guests  
		where email = '{$email}'";		

		$result2 = $this->db->query($query2);

		// $data['users_courses'] = $result->getResultObject();
		$data = $result2->getRow();
		

		// print_r($data->id_guest);

		// exit;

		$id_guest = $data->id_guest;


		// $id_user = $this->session->get('id_user');

		$id_exam = 1;

		$query2= "INSERT INTO guests_exams(id_guest,id_exam) VALUES ('{$id_guest}','{$id_exam}')";

		$result2 = $this->db->query($query2);
		

		//insert certificados
		$created_at = date('y-m-d');

		$updated_at = date('y-m-d');

		// $id_exam = 1;

		$querycert= "INSERT INTO certificatesguest(id_exam,id_guest,created_at,updated_at) VALUES ('{$id_exam}','{$id_guest}','{$created_at}','{$updated_at}')";

		$resultcert = $this->db->query($querycert);


		// $data['tittle'] = 'Success';

		// $data['session'] = $this->session;

		// return view('user/courses/success',$data);
			$this->session->destroy();

			echo "Has pasado";
		}else{

			$this->session->destroy();

			echo "Sigue intentando";
		}

		exit;
		// $data['users_courses_val'] = $result->getRow();	
		

		// $this->session->set($data);

		// return redirect()->to('/questions');

	}

	public function show($id)
	{		

		$data['tittle'] = 'Courses View';

		$data['session'] = $this->session;


		// $data = [
  //           'courses_pensum' => $model->paginate(10),
  //           'pager' => $model->pager,
  //       ];

		$email = $this->session->get('email');

		$query = "SELECT * FROM users as u                     
		left join users_courses as uc on u.id_user = uc.id_user
		left join courses as c on c.id_course = uc.id_course
		left join pensums as p on p.id_course = c.id_course		
		where u.email = '{$email}' and u.is_buyer = 1 and p.id_course = '{$id}'";

		$result = $this->db->query($query);

		$data['courses_pensum'] = $result->getResultObject();

		// $model = new \App\Models\CourseModel();

		// $data = [
  //           'courses_pensum' => $model->paginate(10),
  //           'pager' => $model->pager,
  //       ];

		// print_r($data);

		// exit;		

		return view('user/courses/show',$data);		

		
	}

	public function videos($id)
	{		

		$data['tittle'] = 'Courses Videos';

		$data['session'] = $this->session;


		// $data = [
  //           'courses_pensum' => $model->paginate(10),
  //           'pager' => $model->pager,
  //       ];

		$email = $this->session->get('email');

		$query = "SELECT * FROM users as u                     
		left join users_courses as uc on u.id_user = uc.id_user
		left join courses as c on c.id_course = uc.id_course
		left join pensums as p on p.id_course = c.id_course		
		where u.email = '{$email}' and u.is_buyer = 1 and p.id_pensum = '{$id}'";

		$result = $this->db->query($query);

		$data['courses_pensum'] = $result->getResultObject();

		// $model = new \App\Models\CourseModel();

		// $data = [
  //           'courses_pensum' => $model->paginate(10),
  //           'pager' => $model->pager,
  //       ];

		// print_r($data);

		// exit;		

		return view('user/courses/video',$data);		

		
	}

	public function checkout($id)
	{
		$data['tittle'] = 'Checkout';

		$data['session'] = $this->session;

		$email = $this->session->get('email');

		$query = "SELECT * FROM courses as c 
		left join prices as p on c.id_price = p.id_price				
		where id_course = '{$id}'";

		$result = $this->db->query($query);

		$data['course'] = $result->getRow();

		// $email = $this->session->get('email');

		$query1 = "SELECT * FROM users as u                     
		left join users_courses as uc on u.id_user = uc.id_user
		left join courses as c on c.id_course = uc.id_course		
		where u.email = '{$email}' and u.is_buyer = 1";

		$result1 = $this->db->query($query1);

		$data['users_courses'] = $result1->getRow();



		$query2 = "SELECT * FROM users as u                     
		left join users_courses as uc on u.id_user = uc.id_user
		left join courses as c on c.id_course = uc.id_course		
		where u.email = '{$email}' and u.is_buyer = 1 and c.id_course = '{$id}'";

		$result2 = $this->db->query($query2);

		$data['users_courses_exists'] = $result2->getRow();

		if ($id > 6) {
			throw new \Exception('This course is not available');
		}

		if ($data['users_courses_exists']) {
			// var_dump($data['users_courses_exists']->id_course );
			// var_dump($result2[0]->id_course);
			throw new \Exception('You have already purchased this course');
		}else{

			return view('user/courses/checkout',$data);
			
		}

		// if ($id > 2) {
		// 	throw new \Exception('No Course in Stop');
		// }
		
		// return view('user/courses/checkout',$data);
	}

	public function notify()
	{
		// echo "notify";

		$raw_post_data = file_get_contents('php://input'); 
		$raw_post_array = explode('&', $raw_post_data); 
		$myPost = array(); 
		foreach ($raw_post_array as $keyval) { 
			$keyval = explode ('=', $keyval); 
			if (count($keyval) == 2) 
				$myPost[$keyval[0]] = urldecode($keyval[1]); 
		} 

// Read the post from PayPal system and add 'cmd' 
		$req = 'cmd=_notify-validate'; 
		if(function_exists('get_magic_quotes_gpc')) { 
			$get_magic_quotes_exists = true; 
		} 
		foreach ($myPost as $key => $value) { 
			if($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) { 
				$value = urlencode(stripslashes($value)); 
			} else { 
				$value = urlencode($value); 
			} 
			$req .= "&$key=$value"; 
		} 

/* 
 * Post IPN data back to PayPal to validate the IPN data is genuine 
 * Without this step anyone can fake IPN data 
 */ 
$paypalURL = "https://www.sandbox.paypal.com/cgi-bin/webscr"; 
$ch = curl_init($paypalURL); 
if ($ch == FALSE) { 
	return FALSE; 
} 
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1); 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $req); 
curl_setopt($ch, CURLOPT_SSLVERSION, 6); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); 
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1); 

// Set TCP timeout to 30 seconds 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close', 'User-Agent: company-name')); 
$res = curl_exec($ch); 

$tokens = explode("\r\n\r\n", trim($res)); 
$res = trim(end($tokens)); 
if (strcmp($res, "VERIFIED") == 0 || strcasecmp($res, "VERIFIED") == 0) { 

 //    // Retrieve transaction info from PayPal 
	// $item_number    = $_POST['item_number']; 
	// // $txn_id         = $_POST['txn_id']; 
	// // $payment_gross     = $_POST['mc_gross']; 
	// // $currency_code     = $_POST['mc_currency']; 
	// $payment_status = $_POST['payment_status']; 

	// // var_dump($payment_status);

	// $email = $this->session->get('email');
	

	// $query1= "INSERT INTO orders(order, email, id_course) VALUES ('{$_POST['payment_status']}','{$email}','{$_POST['item_number']}')";

	// $result1 = $this->db->query($query1);

    // Check if transaction data exists with the same TXN ID 
	// $prevPayment = $db->query("SELECT id FROM payments WHERE txn_id = '".$txn_id."'"); 
	// if($prevPayment->num_rows > 0){ 
	// 	exit(); 
	// }else{ 
 //        // Insert transaction data into the database 
	// 	$insert = $db->query("INSERT INTO payments(item_number,txn_id,payment_gross,currency_code,payment_status) VALUES('".$item_number."','".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."')"); 
	// } 

} 

}

public function success()
{

	if (!empty($_GET['PayerID']) && isset($_GET['PayerID']) && !empty($_GET['tx']) && isset($_GET['tx'])) {

			// var_dump($_GET['PayerID']);

			//tx es el id la factura
		$txn_id = $_GET['tx'];
			// el monto
		$payment_gross = $_GET['amt'];

			//la moneda
			// $currency_code = $_GET['cc'];
			//el estatus
		$payment_status = $_GET['st'];

		$id_course = $_GET['id_course'];
		// $id_course = $_GET['item_number'];

		$payer_email = $_GET['payer_email'];
		$payer_id = $_GET['PayerID'];

			// var_dump($payment_status);

		$email = $this->session->get('email');

		// var_dump($_GET['tx'].$email.$_GET['payer_email'].$_GET['item_number'].$_GET['PayerID']);

		//order es palabra reservada de mysql trae conflictos, usar orders
		$query1= "INSERT INTO orders(orders, email, payer_email, id_course, payer_id) VALUES ('{$txn_id}','{$email}','{$payer_email}','{$id_course}','{$payer_id}')";



		// $query1= "INSERT INTO orders(order, email, payer_email, id_course, payer_id) VALUES ('{$_GET['tx']}','{$email}','{$_GET['payer_email']}','{$_GET['item_number']}','{$_GET['PayerID']}')";

		$result1 = $this->db->query($query1);


		$id_user = $this->session->get('id_user');

		$query2= "INSERT INTO users_courses(id_user,id_course) VALUES ('{$id_user}','{$id_course}')";

		$result2 = $this->db->query($query2);


		$query3 = "UPDATE users SET is_buyer = 1
		where email = '{$email}'";

		$result3 = $this->db->query($query3);


		//insert certificados
		$created_at = date('y-m-d');

		$updated_at = date('y-m-d');

		$querycert= "INSERT INTO certificates(id_course,id_user,created_at,updated_at) VALUES ('{$id_course}','{$id_user}','{$created_at}','{$updated_at}')";

		$resultcert = $this->db->query($querycert);


		$data['tittle'] = 'Success';

		$data['session'] = $this->session;

		return view('user/courses/success',$data);
	}

	return redirect()->to('/courses');

		// echo "nada";
		// $data = $this->request->getPost();
// $_GET['PayerID']
		// var_dump($_GET['PayerID']);

		// var_dump($_GET['payer_email']);




}

public function cancel()
{

	$data['tittle'] = 'Cancel';

	$data['session'] = $this->session;
	

	return view('user/courses/cancel',$data);

}

public function descargarCodeigniter()
{

	// http://localhost:8080/public/uploads/pensum/Proyectos/Codeigniter4/codeigniter4_proyecto1.zip

	// $fileName = basename('fichero.txt');
	// $filePath = 'files/'.$fileName;
	$fileName = basename('codeigniter4_proyecto1.zip');
	$filePath = 'uploads/pensum/Proyectos/Codeigniter4/'.$fileName;
	if(!empty($fileName) && file_exists($filePath)){
    // Define headers
		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$fileName");
		header("Content-Type: application/zip");
		header("Content-Transfer-Encoding: binary");

    // Read the file
		readfile($filePath);
		exit;
	}else{
		echo 'The file does not exist.';
	}


}

public function descargarSymfony()
{

	
	$fileName = basename('symfony6_proyecto1.zip');
	$filePath = 'uploads/pensum/Proyectos/Symfony6/'.$fileName;
	if(!empty($fileName) && file_exists($filePath)){
    // Define headers
		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$fileName");
		header("Content-Type: application/zip");
		header("Content-Transfer-Encoding: binary");

    // Read the file
		readfile($filePath);
		exit;
	}else{
		echo 'The file does not exist.';
	}


}

public function descargarSym()
{

	
	$fileName = basename('symfony5_proyecto1.zip');
	$filePath = 'uploads/pensum/Proyectos/Symfony5/'.$fileName;
	if(!empty($fileName) && file_exists($filePath)){
    // Define headers
		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$fileName");
		header("Content-Type: application/zip");
		header("Content-Transfer-Encoding: binary");

    // Read the file
		readfile($filePath);
		exit;
	}else{
		echo 'The file does not exist.';
	}


}

public function descargarYii()
{

	
	$fileName = basename('yii2_proyecto1.zip');
	$filePath = 'uploads/pensum/Proyectos/Yii2/'.$fileName;
	if(!empty($fileName) && file_exists($filePath)){
    // Define headers
		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$fileName");
		header("Content-Type: application/zip");
		header("Content-Transfer-Encoding: binary");

    // Read the file
		readfile($filePath);
		exit;
	}else{
		echo 'The file does not exist.';
	}


}

public function descargarLaravel()
{

	
	$fileName = basename('proyectolaravel.zip');
	$filePath = 'uploads/pensum/Proyectos/Laravel10/'.$fileName;
	if(!empty($fileName) && file_exists($filePath)){
    // Define headers
		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$fileName");
		header("Content-Type: application/zip");
		header("Content-Transfer-Encoding: binary");

    // Read the file
		readfile($filePath);
		exit;
	}else{
		echo 'The file does not exist.';
	}


}

public function descargarCake()
{

	
	$fileName = basename('proyectocake.zip');
	$filePath = 'uploads/pensum/Proyectos/Cake4/'.$fileName;
	if(!empty($fileName) && file_exists($filePath)){
    // Define headers
		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$fileName");
		header("Content-Type: application/zip");
		header("Content-Transfer-Encoding: binary");

    // Read the file
		readfile($filePath);
		exit;
	}else{
		echo 'The file does not exist.';
	}


}								

}


