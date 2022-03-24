<?php 

	require_once __DIR__.'/../../config/database.php';
	/**
	 * 
	 */
	class Product extends Database
	{
		
		// private $connection;

		function __construct()
		{
			// code...
			// $this->connection = $this->getConn();

			parent::__construct();

		}

		public function test()
		{
			// code...
			return $this->conn;
		}

	}


 ?>