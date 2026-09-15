<?php namespace App\Models;

use CodeIgniter\Model;

class CertificateModel extends Model
{

	protected $table = 'certificates';
	protected $primaryKey = 'id_certificate';

	// protected $returnType = 'array';
	protected $returnType = 'object';

	// protected $useSoftDeletes = true;

	// si estos campos no se agregan no deja insertar en la tabla
	protected $allowedFields = ['id_course'];

	protected $validationRules = [			
		'id_course' => 'required'
	];	

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';				
	

}
