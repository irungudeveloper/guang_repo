<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted

		$user_name = $_POST['f_name'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT) ;

		$profile_photo = $_FILES['file']['name'];
		$target_dir = "upload/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		
		  
		 if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name))
		 {
		 	echo "Saved Image";
		 }

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) )
		{

			//save to database
			// $user_id = random_num(20);
			$query = "insert into user (full_name,city,profile_photo,email,password) values ('$user_name','$city','$profile_photo','$email','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Guang Project</title>
  </head>
  <body>
     
     <div class="row m-0 p-2 justify-content-center">

      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
              </ul>
              <span class="navbar-text">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Login</a>
                </li>
              </ul>
              </span>
            </div>
          </div>
        </nav>
      </div>

       <div class="col-10 col-md-10 m-0 p-2">
         <div class="card">
           <div class="card-header">
             <h3 class="h3">Registration Form</h3>
           </div>
           <div class="card-body m-0">
             <form method="POST" enctype="multipart/form-data">
               <div class="form-group row">
                 <div class="col-12">
                   <label for="name">Full Name</label>
                   <input type="text" name="f_name" class="form-control">
                 </div>
               </div>
               <div class="form-group row">
                 <div class="col-6">
                   <label for="email">Email</label>
                   <input type="email" name="email" class="form-control">
                 </div>
                 <div class="col-6">
                   <label for="password">Password</label>
                   <input type="password" name="password" class="form-control">
                 </div>
               </div>
               <div class="form-group row">
                 <div class="col-12">
                   <label for="city">City of Residence</label>
                   <input type="text" name="city" class="form-control">
                 </div>
               </div>
               <div class="form-group row">
                 <div class="col-12">
                   <label for="photo">Profile Photo</label>
                   <input type="file" name="name" class="form-control">
                 </div>
               </div>
               <div class="form-group row">
                 <div class="col-12 text-center">
                   <input type="submit" name="submit" value="Create Account" class="btn btn-solid btn-success">
                 </div>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>