<?php
if(isset($_POST["registerbtn"])) 
{
  $connect = mysqli_connect("localhost","root","","project3");
  
  $username = $_POST["username"];
  $password = $_POST["password"];
  $phone   = $_POST["phone"];

  $qry = "INSERT INTO `register`(`id`,  `username`, `password`, `phone`) VALUES (NULL,'$username','$password','$phone')";
  $result = mysqli_query($connect , $qry);
  if($result){
  	echo "Data Entered Succcessfully in to database as follows <br>";
  	echo "Username = ".$username."<br>";
  	echo "Password = ".$password."<br>";
  	echo "Phone No. = ".$phone."<br>";
  }
  else
  {
  	echo "Something went wrong";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert data</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<center><h2>Register user</h2></center>
<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header bg-secondary text-light">
						Registration form
					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label>User Name</label>
								<input type="text" name="username" class="form-control">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control">
							</div>

							
							<div class="form-group">
								<label>Phone no.</label>
								<input type="tel" name="phone" class="form-control">
							</div>
							<div class="form-group">
								<button name="registerbtn" class="btn btn-secondary">Register</button>
							</div>
								
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



</body>
</html>