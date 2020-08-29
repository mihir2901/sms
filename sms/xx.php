 include('dbcon.php');

	 if (isset($_POST['login'])) {
	 	
	 		$username = $_POST['uname'];
	 		$password = $_POST['pass'];

	 	$qry="SELECT * FROM 'admin' WHERE 'username'='$username' AND 'password'='$password'";
	 	$run=mysqli_query($con,$qry);
	 	$row= mysql_result($run);
	 	if ($row ) {
 				 
	 		<script> alert('Username or Password not match !!')</script>
	 		window.open('login.php','_self');

	 		<?php

	 		}	

	 		else {

	 			$data=mysqli_fetch($run);
	 			$id=$data ['id'];

	 			echo "id=" .$id;
	 		}

	  } 
	 