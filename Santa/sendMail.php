<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form align="center" method="POST" action="" >
						
						Name:<br>
						<input type="text" name="Name" value="Name">
						<br>
						Email:<br>
						<input type="text" name="Email" value="Email">
						
						<br><br>
						<input type="submit" value="Submit" name="Submit">
					  </form> 


					 <?php 
if (!empty($_POST ['Submit'])){

echo  "<h1> Hello </h1> " ; 
echo $_POST["Name"]; 

//include "SantasTable.php";

}
else {

	echo "Enter name and email";
}

 ?>



<?php
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail($_POST["Email"],"My subject",$msg);
?>
					  

</body>
</html>