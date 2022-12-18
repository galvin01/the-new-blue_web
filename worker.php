<!DOCTYPE html>
<html>

<head>
	<title>SIGNING-IN</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "work");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$ClientID = $_REQUEST['ClientID'];
        $first_name = $_REQUEST['first_name'];
		$middle_name = $_REQUEST['middle_name'];
		$surname_name = $_REQUEST['surname_name'];
		$email = $_REQUEST['email'];
        $worker = $_worker['worker'];
		$password = $_REQUEST['password'];
        $gender = $_REQUEST['gender'];
        $county = $_REQUEST['county'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO wor VALUES ('$ClientID','$first_name',
			'$middle_name','$surname_name','$email','$worker','$password','$gender','$county')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data.Now go back and sign-in.</h3>";

        $url = "./homepage.html";
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