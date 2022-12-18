<?php
//create server and database connection constants
$host = "localhost";
$user = "root";
$pwd = "";
$db = "rec";

$con= new mysqli ($host, $user, $pwd, $db);

//Check server connection
if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";
}
//receive  values from user form and trim white spaces
$ClientID=trim($_POST['CLientID']);
$firstname=trim($_POST['firstname']);
$middlename=trim($_POST['middlename']);
$email=trim($_POST['email']);
$worker=trim($_POST['worker']);
$Complain=trim($_POST['Complain']);

//now insert the received values into database using defined variables
$sqli ="INSERT INTO registration(ClientID,firstname,middlename,email,worker,Complain) VALUES ('$ClientID','$firstname','$middlename','$email','$worker','$Complain')";

if ($con->query($sqli) === TRUE) {
    echo "New Client record created successfully";
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}

$con->close(); //close the connection for security reasons
?>
