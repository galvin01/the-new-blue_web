<?php
//create server and database connection constants
$host = "localhost";
$user = "root";
$pwd = "";
$db = "blue";

$con= new mysqli ($host, $user, $pwd, $db);

//Check server connection
if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";
}
//receive  values from user form and trim white spaces
$ClientID=trim($_POST['ClientID']);
$firstname=trim($_POST['firstname']);
$middlename=trim($_POST['middlename']);
$lastname=trim($_POST['lastname']);
$surnamename=trim($_POST['surnamename']);
$email=trim($_POST['email']);
$worker=trim($_POST['worker']);
$gender=trim($_POST['gender']);
$county=trim($_POST['county']);

//now insert the received values into database using defined variables
//now insert the received values into database using defined variables
$sqli ="INSERT INTO registration(ClientID,firstname,middlename,lastname,surnamename,email,worker,gender,county) VALUES ('$ClientID','$firstname','$middlename','$lastname','$surnamename','$email','$worker','$gender','$county')";
if ($con->query($sqli) === TRUE) {
    echo "New Patient record created successfully";
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}

$con->close(); //close the connection for security reasons
?>