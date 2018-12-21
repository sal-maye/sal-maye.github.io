
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"> </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">        </script>
     <script src="typeahead.min.js"></script>
	<title>Santa</title>
	<link rel="stylesheet" href="style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
#myBtn {

	  margin: 40px 630px;
}
</style>
</head>

<body>


<div align="center">

	<h1 align="center"><span class="blue" align = "center">&lt;</span> SecretSanta <span class="blue">&gt;</span> <span class="yellow"> </pan></h1>
	<h3 align="center"><span class="blue" align = "center">&lt;</span>Add Your Name<span class="blue">&gt;</span> <span class="yellow">And Email</pan></h3>

<script>
function validateForm() {
  var x = document.forms["myForm"]["Name"].value;
  var y = document.forms["myForm"]["Email"].value;
  if (x == "" ) {
    alert("Name must be filled out");
    return false;
  }
  if (y == "") {
    alert("Email must be filled out");
    return false;
  }
}
</script>

<form name = "myForm" align="center" method="POST" action="Santa.php" onsubmit="return validateForm()" >
						
						Name:<br>
						<input type="text" name="Name" value="">
						<br>
						Email:<br>
						<input type="Email" name="Email" value="">
						
						<br><br>
						<input type="submit" value="Submit" name="Submit">
					  </form> 
	
<?php 

if (!empty($_POST ['Submit'])){

 include "added.php";

//include "SantasTable.php";

}
else {

	echo "Enter name and email";
}

 ?>


<body>



<!-- Trigger/Open The Modal -->

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>





</script>



</div>

</body>
</html>