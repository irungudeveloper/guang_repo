<?php 


	require_once __DIR__.'/../../config/database.php';

	/**
	 * 
	 */
	class User extends Database
	{
		
		function __construct(argument)
		{
			// code...

			parent::__construct;
		}

		public function test()
		{
			// code...
			return $this->conn;
		}

		public function insert($data)
		{
			try 
			{

			$sql = "INSERT INTO user(full_name, city, profile_photo, email, password) VALUES (:full_name, :city, :profile_photo, :email, :password)";
			$stmt= $this->conn->prepare($sql);
			$stmt->execute($data);

			return 1;
				
			} 
			catch (Exception $e) 
			{
				return $e;
			}

		}

		public function read()
		{
			try 
			{
				$stmt = $this->conn->prepare("SELECT * FROM user");
                $stmt->execute();
                $users = $stmt->fetchAll();	

                return $users;
			} 
			catch (Exception $e) 
			{
				return $e;	
			}

		}

		public function email_search($email)
		{
			// code...


			try 
			{
				$stmt = $this->conn->prepare("SELECT password FROM user where email=:email");
                $stmt->execute($email);
                $users = $stmt->fetchAll();	

                return $users;
			} 
			catch (Exception $e) 
			{
				return $e;	
			}
		}

		public function update($data)
		{
			// code...

			// full_name, city, profile_photo, email, password

			try 
			{
				$sql = "UPDATE user SET full_name=:full_name, profile_photo=:profile_photo, email=:email, password=:password WHERE id=:id";
				$stmt= $this->conn->prepare($sql);
				$stmt->execute($data);

				return 1;

			} 
			catch (Exception $e) 
			{
				return $e;
			}

			
		}

		public function delete($id)
		{
			// code...
				try 
				{
					$stmt = $this->conn->prepare("DELETE FROM user WHERE id= :id");
					$stmt->bindParam(':id', $id);
					$stmt->execute();	
					return 1;
				} 
				catch (Exception $e) 
				{
					return $e;	
				}
		}

	}


 ?>