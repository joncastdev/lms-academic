<?php

namespace App\Controllers;

use App\Traits\MiddlewareAuth;

use App\Libraries\Fpdf;

class CertificatesGuest extends BaseController
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
		$data['tittle'] = 'Certificados de Test';		

		return view('certificatesguest',$data);
	}

	public function number()
	{		

		$data['tittle'] = 'Certificado de Test Programación';

		$cert_number = $this->request->getGet('certificate');

		// print_r($cert_number);

		// exit;

		// un query mas simple para obtener solo 1 certificado, por que con la tabla users_users es muchos a muchos
		$query = "SELECT * FROM guests as g
		left join certificatesguest as ce on ce.id_guest = g.id_guest                  
		left join exams as e on e.id_exam = ce.id_exam			
		where ce.id_certificateguest = '{$cert_number}'";
	

		$result = $this->db->query($query);

		// print_r($result);

		// exit;
		

		$data['certificate_info'] = $result->getResult();

		// print_r($data['certificate_info']);

		// exit;

		$data['certificate_get'] = $this->request->getGet('certificate');

				

		return view('numberceguest',$data);				

		
	}

	// public function pdfNumber($cert_number)
	// {		

	// 	// $cert_number = $this->request->getGet('certificate');

	// 	// en este ejemplo hay que usar right join es un join diferente
	// 	$query = "SELECT * FROM guests as g
	// 	left join certificatesguest as ce on ce.id_guest = g.id_guest                  
	// 	left join exams as e on e.id_exam = ce.id_exam			
	// 	where ce.id_certificateguest = '{$cert_number}";
		

	// 	$result = $this->db->query($query);

	// 	$data = $result->getRow();

	// 	if ($data) {
			


	// 	// $data['certificate_info'] = $result->getResult();

	// 	// print_r($data);
	// 	// print_r($data->id_course);	

	// 	// exit;

	// 	// se extrae el id
	// 		$id_exam = $data->id_exam;			

	// 	// return view('number',$data);

	// 		$query1 = "SELECT * FROM pensums as p 		
	// 		left join courses as c on c.id_course = p.id_course			
	// 		where p.id_course = '{$id_curso}'";

	// 		$result1 = $this->db->query($query1);

	// 		$dataPensum = $result1->getResultArray();		


	// 		$this->pdf = new fpdf();	

	// 		$this->pdf->AddPage();

	// 		$this->pdf->AliasNbPages(); 

	// 		// $this->pdf->SetTitle("Pensum Curso Laravel 10");
	// 		$this->pdf->SetTitle("Pensum Curso {$data->name}");
	// 		$this->pdf->SetLeftMargin(15);
	// 		$this->pdf->SetRightMargin(15);
	// 		$this->pdf->SetFillColor(200,200,200); 

	// 		$this->pdf->SetFont('Arial', 'B', 9);


	// 	// $this->pdf->SetWidths(array(15,15,15,25,15,15,15,15,15,15,30));

	// 		$this->pdf->SetWidths(array(60,60));    


	// 		$this->pdf->Cell(120,5,'El Estudiante participo en el curso y tiene conocimientos sobre estos temas:','TB',0,'L','1');
	// 		$this->pdf->Ln(5);
	// 		$this->pdf->Row(array('Clase Nro','Clase'));
	// 		$this->pdf->Ln(5);
	// 		// $this->pdf->Row(array('Clase Nro','Clase'));



	// 		foreach ($dataPensum as $datos) {


	// 			$this->pdf->Row(array($datos['id_pensum'],$datos['pensum']));

	// 		}

	// 		$this->pdf->Cell(40,5,'Pensum Actualizado:','TB',0,'L','1');
	// 	// $this->pdf->Cell(40,5,'Pensum Actualizado: date("d-m-y")','B',0,'L',0);
	// 		$this->pdf->Cell(40,5, date("d-m-y"),'B',0,'L',0);
	// 	// $this->pdf->Cell(40,5,'By Jonathan Castro :','TB',0,'L','1');
	// 		$this->pdf->Cell(40,5, 'https://cursosprogramaciongratis.online/','B',0,'L',0);
	// 		$this->pdf->Ln(5);



	// 		$this->pdf->Output("Pensum {$data->name}.pdf", 'D');
	// 		// $this->pdf->Output("Pensum.pdf", 'I');
	// 		// $this->pdf->Output("Pensum.pdf", 'S');
	// 		// $this->pdf->Output("Pensum.pdf", 'F');			

	// 	}	

		
	// }


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
	
	
}
