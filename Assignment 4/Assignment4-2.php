<?php
include_once("dbinfo.php");
// Creating Connection 
$conn = mysqli_connect($db_host, $db_user, $db_password, "assignment3"); 

// Checking Connection 
if (!$conn) { 
    die("Connection failed: ". mysqli_connect_error()); 
}
echo "Connected Successfully";
echo "<br/>";

    

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 4 - 2 </title>    
        <style>table, th, td {  border: 1px solid black;} </style>
    </head>
    <body>

    
    <?php 

        $all_users = array();

        $sql= "SELECT * FROM registered_users1";
        
        $results = mysqli_query($conn, $sql); 

        while($row = mysqli_fetch_assoc($results)){
            
            $user_array =  array($row['user_id'],$row['firstName'], $row['lastName']);
            array_push($all_users, $user_array);

          
        }


        for ($row = 0; $row < count($all_users); $row++ ) {
            for ($col = 0; $col < count($all_users[$col]); $col ++) {
                echo $all_users[$row][$col] . ",  ";
                echo "<br/>";
    
            }
        }
      

    ?>  
        
    </body>
</html>