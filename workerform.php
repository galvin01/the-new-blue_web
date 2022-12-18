<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
</head>
<body>
	<center>
		<h1>Storing Form data in Database</h1>
		<form action="indexworker.php" method="post">
			
<p>
			<label for="firstName">First Name:</label>
			<input type="text" name="first_name" id="firstName">
			</p>

			
<p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="last_name" id="lastName">
			</p>

<p>
			<label for="Idnumber">ID-Number:</label>
			<input type="text" name="idnumber" id="idnumber">
			</p>


<p>
			<label for="Gender">Gender:</label>
            <select name="gender" id="cars">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
			</p>

<p>
			<label for="work">Work:</label>
            <select name="work" id="work">
                <option value="plumber">Plumber</option>
                <option value="driver">Driver</option>
                <option value="electrician">Electrcian</option>
                <option value="welder">Welder</option>
                <option value="Carpenter">Carpenter</option>
            </select>
			</p>
<p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
			</p>
			
<p>
			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address">
			</p>

<p>
			<label for="county">County:</label>
			<input type="text" name="county" id="county">
			</p>

			


			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>
