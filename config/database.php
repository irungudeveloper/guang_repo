<?php 

	/**
	 * 
	 */
	class Database
	{

		private $host="127.0.0.1";
		private $db_name = "guang_db" ;
		private $username = "root" ;
		private $password = "" ;
		protected $conn;
		protected $message;
		
		public function __construct()
		{
			// code...
			try 
			{
				$this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name",$this->username,$this->password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				
			} 
			catch (PDOException $e) 
			{
				$this->message = $e->getMessage();
			}
	
		}
	}

 ?>