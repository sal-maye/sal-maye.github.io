	<!DOCTYPE html>
    <html>
    <head>
            <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
    
    
    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "maye","7Q5iMBKgY6YNGLDj", "SantaX");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$ID = $_GET['ID'];
 $sql = "DELETE FROM SantaX WHERE id= '$ID'";

if (mysqli_query($link, $sql)) {
    include "Thanks.php";
} else {
    echo "Error deleting record: " . mysqli_error($link);
}

mysqli_close($link);
?>








      
