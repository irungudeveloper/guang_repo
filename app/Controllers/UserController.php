<?php 

require_once __DIR__.'/../../app/Models/user.php';


/**
 * 
 */
class UserController extends User
{
	
	function __construct()
	{
		// code...

	}

	public function register($data)
	{
		// code...

		return parent::insert($data);

	}

	public function login($email,$password)
	{
		// code...

		$db_password = parent::email($email);

		return $db_password;

		// if (password_verify($password, $db_password)) 
		// {
		// 	// code...
		// 	session_start();

		// 	return true;
		// }
		// else
		// {
		// 	return false;
		// }
	}


}

 ?>