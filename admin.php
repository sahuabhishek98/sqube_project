<?php
$db = mysqli_connect('localhost', 'root', '', 'sqube');
if($db){
	// echo "conenction successful";
}else{
	echo "no connection";
}
if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select * from  admin where username='$username' and password='$password' ";
	$query = mysqli_query($db,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			header('location:data.php');
		}else{
			echo "<h1>login failed</h1>";
			// header('location:index.php');
		}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?> 

</head>
<body>

<header>
	<div class="container center-div shadow ">
		<div class="heading text-center mb-5 text-uppercase text-white"> ADMIN LOGIN PAGE </div>
		<div class="container row d-flex flex-row justify-content-center mb-5">
			<div class="admin-form shadow p-2 ">
					<form action="" method="POST">
						<div class="form-group">
							<label>USER ID</label>
							<input type="text" name="user" value="" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" name="pass" value="" class="form-control" autocomplete="off">
						</div>
						<input type="submit" class="btn btn-success" name="submit" >
				</form>
			</div>
		</div>
	</div>
</header>

</body>
</html>