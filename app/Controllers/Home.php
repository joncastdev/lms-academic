<?php

namespace App\Controllers;

use App\Traits\MiddlewareAuth;

use App\Libraries\Fpdf;

class Home extends BaseController
{

	use MiddlewareAuth;

	protected $session;

	protected $db;

	protected $pdf;

	public function __construct()
	{
		
		helper(['form', 'url']);

		$this->session = \Config\Services::session();

		$this->db = \Config\Database::connect();


	}

	public function index()
	{
		$data['tittle'] = 'Cursos de Programación Gratis Online';

		$query1 = "SELECT * FROM courses as c 
		left join prices as p on c.id_price = p.id_price
		";

		$result1 = $this->db->query($query1);

		$data['all_courses'] = $result1->getResultObject();

		return view('home',$data);
	}

	public function show($id)
	{		

		$data['tittle'] = 'Courses View';

		$data['session'] = $this->session;

		// $email = $this->session->get('email');

		$query = "SELECT * FROM users as u                     
		left join users_courses as uc on u.id_user = uc.id_user
		left join courses as c on c.id_course = uc.id_course
		left join pensums as p on p.id_course = c.id_course		
		where p.id_course = '{$id}'";

		$result = $this->db->query($query);

		$data['courses_pensum'] = $result->getResultObject();			

		return view('courses_all',$data);		

		
	}

	public function videos($id)
	{		

		$data['tittle'] = 'Courses Videos';

		$data['session'] = $this->session;	

		// $email = $this->session->get('email');

		$query = "SELECT * FROM users as u                     
		left join users_courses as uc on u.id_user = uc.id_user
		left join courses as c on c.id_course = uc.id_course
		left join pensums as p on p.id_course = c.id_course		
		where p.id_pensum = '{$id}'";

		$result = $this->db->query($query);

		$data['courses_pensum'] = $result->getResultObject();


		return view('videos_all',$data);		

		
	}

	public function pdfSymfonySeis()
	{ 		

		$query = "SELECT * FROM pensums as p 		
		left join courses as c on c.id_course = p.id_course			
		where p.id_course = 2";

		$result = $this->db->query($query);

		$data = $result->getResultArray();


		$this->pdf = new fpdf();	

		$this->pdf->AddPage();

		$this->pdf->AliasNbPages(); 

		$this->pdf->SetTitle("Pensum Curso Symfony 6");
		$this->pdf->SetLeftMargin(15);
		$this->pdf->SetRightMargin(15);
		$this->pdf->SetFillColor(200,200,200); 

		$this->pdf->SetFont('Arial', 'B', 9);


		// $this->pdf->SetWidths(array(15,15,15,25,15,15,15,15,15,15,30));

		$this->pdf->SetWidths(array(60,60));    

		
		$this->pdf->Row(array('Clase Nro','Clase'));



		foreach ($data as $datos) {


			$this->pdf->Row(array($datos['id_pensum'],$datos['pensum']));

		}

		$this->pdf->Cell(40,5,'Pensum Actualizado:','TB',0,'L','1');
		// $this->pdf->Cell(40,5,'Pensum Actualizado: date("d-m-y")','B',0,'L',0);
		$this->pdf->Cell(40,5, date("d-m-y"),'B',0,'L',0);
		// $this->pdf->Cell(40,5,'By Jonathan Castro :','TB',0,'L','1');
		$this->pdf->Cell(40,5, 'https://cursosprogramaciongratis.online/','B',0,'L',0);
		$this->pdf->Ln(5);
		


		$this->pdf->Output("Pensum_Curso_Symfony6.pdf", 'D');

	}

	public function pdfCodeigniterCuatro()
	{ 		

		$query = "SELECT * FROM pensums as p 		
		left join courses as c on c.id_course = p.id_course			
		where p.id_course = 1";

		$result = $this->db->query($query);

		$data = $result->getResultArray();


		$this->pdf = new fpdf();	

		$this->pdf->AddPage();

		$this->pdf->AliasNbPages(); 

		$this->pdf->SetTitle("Pensum Curso Codeigniter 4");
		$this->pdf->SetLeftMargin(15);
		$this->pdf->SetRightMargin(15);
		$this->pdf->SetFillColor(200,200,200); 

		$this->pdf->SetFont('Arial', 'B', 9);


		// $this->pdf->SetWidths(array(15,15,15,25,15,15,15,15,15,15,30));

		$this->pdf->SetWidths(array(60,60));    

		
		$this->pdf->Row(array('Clase Nro','Clase'));



		foreach ($data as $datos) {


			$this->pdf->Row(array($datos['id_pensum'],$datos['pensum']));

		}

		$this->pdf->Cell(40,5,'Pensum Actualizado:','TB',0,'L','1');
		// $this->pdf->Cell(40,5,'Pensum Actualizado: date("d-m-y")','B',0,'L',0);
		$this->pdf->Cell(40,5, date("d-m-y"),'B',0,'L',0);
		// $this->pdf->Cell(40,5,'By Jonathan Castro :','TB',0,'L','1');
		$this->pdf->Cell(40,5, 'https://cursosprogramaciongratis.online/','B',0,'L',0);
		$this->pdf->Ln(5);
		


		$this->pdf->Output("Pensum_Curso_Codeigniter4.pdf", 'D');

	}

	public function pdfLaravelDiez()
	{ 		

		$query = "SELECT * FROM pensums as p 		
		left join courses as c on c.id_course = p.id_course			
		where p.id_course = 5";

		$result = $this->db->query($query);

		$data = $result->getResultArray();


		$this->pdf = new fpdf();	

		$this->pdf->AddPage();

		$this->pdf->AliasNbPages(); 

		$this->pdf->SetTitle("Pensum Curso Laravel 10");
		$this->pdf->SetLeftMargin(15);
		$this->pdf->SetRightMargin(15);
		$this->pdf->SetFillColor(200,200,200); 

		$this->pdf->SetFont('Arial', 'B', 9);


		// $this->pdf->SetWidths(array(15,15,15,25,15,15,15,15,15,15,30));

		$this->pdf->SetWidths(array(60,60));    

		
		$this->pdf->Row(array('Clase Nro','Clase'));



		foreach ($data as $datos) {


			$this->pdf->Row(array($datos['id_pensum'],$datos['pensum']));

		}

		$this->pdf->Cell(40,5,'Pensum Actualizado:','TB',0,'L','1');
		// $this->pdf->Cell(40,5,'Pensum Actualizado: date("d-m-y")','B',0,'L',0);
		$this->pdf->Cell(40,5, date("d-m-y"),'B',0,'L',0);
		// $this->pdf->Cell(40,5,'By Jonathan Castro :','TB',0,'L','1');
		$this->pdf->Cell(40,5, 'https://cursosprogramaciongratis.online/','B',0,'L',0);
		$this->pdf->Ln(5);
		


		$this->pdf->Output("Pensum_Curso_Laravel10.pdf", 'D');

	}

	
	
}
