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

    
   // 

    
    

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 4 - 1 </title>    
        <style>table, th, td {  border: 1px solid black;} </style>
    </head>
    <body>

    
    <?php 

        $last_name_array = array();

        $sql= "SELECT * FROM registered_users1";
        
        //echo "$sql";
        $results = mysqli_query($conn, $sql); 

        while($row = mysqli_fetch_assoc($results)){
                        
            $lName = $row['lastName'];
            array_push($last_name_array, "$lName");
        }

        sort($last_name_array); 

        foreach ($last_name_array as $lname) {
            echo "The entered last names were: $lname"; 
            echo "<br/>";
        } 
        /*
        // This is another way to loop through to output
        for ($i = 0; $i < count($last_name_array); $i++) {
            echo "Animal " . $last_name_array[$i] . "<br />"; 
        }
        */

    ?>  
        
    </body>
</html>