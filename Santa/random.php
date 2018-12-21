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
 
// Attempt select query execution
$sql = "SELECT ID, Name, Email FROM santax ORDER BY RAND() LIMIT 1";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table   border = 1 class= container> ";
        echo "<thead>";
            echo "<tr>";
            echo "<th> <h1> ID</h1></th>";
                echo "<th> <h1> Name </h1></th>";
                echo " <th> <h1>Email</h1></th>";
                  echo "</thead>";
               echo "<tbody>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                
            echo "</tr>";
        }
                
            
echo "<tbody>";
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
