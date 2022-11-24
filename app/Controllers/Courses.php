<?php namespace App\Controllers;

use App\Models\UserModel;

use App\Models\CourseModel;

use App\Traits\MiddlewareAuth;

class Courses extends BaseController
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

		$this->checkUser();

	}

	public function index()
	{
		$data['tittle'] = 'Courses';

		$data['session'] = $this->session;

		$email = $this->session->get('email');

		$query = "SELECT * FROM users as u                     
		left join users_courses as uc on u.id_user = uc.id_user
		left join courses as c on c.id_course = uc.id_course		
		where u.email = '{$email}' and u.is_buyer = 1";

		// $query = "SELECT * FROM users as u                     
		// left join users_courses as uc on u.id_user = uc.id_user
		// left join courses as c on c.id_course = uc.id_course		
		// where u.email = '{$email}' and u.is_buyer = 1 or c.id_course = 1  or c.id_course = 2";

		$result = $this->db->query($query);

		$data['users_courses'] = $result->getResultObject();
		$data['users_courses_val'] = $result->getRow();

		$query2 = "SELECT * FROM users as u                     
		left join users_courses as uc on u.id_user = uc.id_user
		left join courses as c on c.id_course = uc.id_course
		left join prices as p on c.id_price = p.id_price		
		where u.email = '{$email}' and u.is_buyer = 1";

		$result2 = $this->db->query($query2);

		$data['users_courses_val1'] = $result2->getRow();

		// $query = "SELECT * FROM users as u                     
		// left join users_courses as uc on u.id_user = uc.id_user
		// left join courses as c on c.id_course = uc.id_course		
		// where u.email = '{$email}' and u.is_buyer = 1 or c.id_course = 1  or c.id_course = 2";

		// $data['users_courses_val'] = $result->getRow();

		// print_r($data);

		// exit;

		$query3 = "SELECT * FROM courses as c 
		left join prices as p on c.id_price = p.id_price
		where c.id_course = 2
		";

		$result3 = $this->db->query($query3);

		$data['users_courses_val2'] = $result3->getRow();

		$query4 = "SELECT * FROM courses as c 
		left join prices as p on c.id_price = p.id_price
		where c.id_course = 1
		";

		$result4 = $this->db->query($query4);

		$data['users_courses_val3'] = $result4->getRow();
		


		$query1 = "SELECT * FROM courses as c 
		left join prices as p on c.id_price = p.id_price
		";

		$result1 = $this->db->query($query1);

		$data['all_courses'] = $result1->getResultObject();
		// $data['all_courses'] = $result1->getRow();

		return view('user/courses/index',$data);
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

		if ($id > 2) {
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

}


