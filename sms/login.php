<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
</head>
<body>
  
  <h1 align="center">Admn login</h1>
  <form action="login.php" method="post">
  	
  	<table  align="center">
  		<tr>
  			<td>username</td><td><input type="text" name="uname" required></td>
  		</tr>

  		<tr>
  			<td>password</td><td><input type="password" name="pass" required></td>
  		</tr>

  		<tr>
  			<td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
  		</tr>

  	</table>
  </form>

</body>
</html> 

<?php

	 include('dbcon.php');

	 if (isset($_POST['login'])) {
	 	
	 		$username = $_POST['uname'];
	 		$password = $_POST['pass'];

	 	$qry="SELECT * FROM 'admin' WHERE 'username'='$username' AND 'password'='$password'";
	 	$run=mysqli_query($con,$qry);
	 	$row= mysql_result($run);
	 	if ($row ) {
 				 
?>
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
	 
?>