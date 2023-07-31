<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

	protected $table = 'users';
	protected $primaryKey = 'id_user';

	// protected $returnType = 'array';
	protected $returnType = 'object';

	// protected $useSoftDeletes = true;

	// si estos campos no se agregan no deja insertar en la tabla
	protected $allowedFields = ['img','first_name', 'last_name','email','password', 'token', 'id_role','id_country','id_statu', 'is_buyer','linkedin'];

	protected $validationRules = [
		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required',		
		'password' => 'required'
	];

	
	// protected $useTimestamps = true;
 //    protected $createdField  = 'created_at';
 //    protected $updatedField  = 'updated_at';

 //    protected $deletedField  = 'deleted_at';


	

}
