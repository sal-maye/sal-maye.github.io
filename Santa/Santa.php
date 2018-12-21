<?php

$servername = "localhost";
$username = "maye";  //your user name for php my admin if in local most probaly it will be "root"
$password = "7Q5iMBKgY6YNGLDj";  //password probably it will be empty
$mydb = "SantaX"; //Your db nane
// Create connection
$conn = new mysqli($servername, $username, $password, $mydb);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
//$Name = "Name";
if (isset($_POST['Submit']) ) {

	$Name = "Name";
$Email= "Email";
	# code...
}
$sql = "SELECT COUNT(Name) as matches FROM SantaX WHERE Name = '$_POST[Name]'";

if ($result = $conn->query($sql)) {
	while($row = $result->fetch_array()) {
		if ($row['matches'] > 0)  header("Location: userx.php");
		else {
$sql = "INSERT INTO SantaX (Name, Email)
VALUES ('$_POST[Name]','$_POST[Email]')";
header("Location: added.php");

}	
	}	

}




if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

include "Santas.php";
//header("Location: gp.php");
$conn->close();
