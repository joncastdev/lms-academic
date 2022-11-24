<?php namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{

	protected $table = 'courses';
	protected $primaryKey = 'id_course';

	// protected $returnType = 'array';
	protected $returnType = 'object';

	// protected $useSoftDeletes = true;

	// si estos campos no se agregan no deja insertar en la tabla
	protected $allowedFields = ['name','id_price'];

	protected $validationRules = [		
		'name' => 'required',
		'id_price' => 'required'
	];					
	

}
