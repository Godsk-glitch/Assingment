<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "register");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		// $first_name = $_REQUEST['first_name'];
		// $last_name = $_REQUEST['last_name'];
		// $gender = $_REQUEST['gender'];
		// $address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$pas = $_REQUEST['pas'];
		$pass =$_REQUEST['pass'];
		
		// Performing insert query execution
		// here our table name is userregs
		$sql = "INSERT INTO userregs VALUES ('$email','$pas','$pass')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$email\n $pas\n $pass");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
