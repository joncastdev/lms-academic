<?php namespace App\Models;

use CodeIgniter\Model;

class UserCourseModel extends Model
{

	protected $table = 'users_courses';
	protected $primaryKey = 'id_user_course';

	// protected $returnType = 'array';
	protected $returnType = 'object';

	// protected $useSoftDeletes = true;

	// si estos campos no se agregan no deja insertar en la tabla
	protected $allowedFields = ['id_user','id_course'];

	protected $validationRules = [		
		'id_user' => 'required',
		'id_course' => 'required'
	];					
	

}
