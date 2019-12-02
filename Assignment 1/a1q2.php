<!-- Brandon Debison -->
<!-- INET 2005 -->
<!-- Assignment 1 -->

<?php
    $dateCaluation = null;
    // Checking to see if the form has been posted
    if (isset( $_POST['form1'] ) ) {
        $dateCaluation = strtotime($_POST['inputtedDate']);
    }

?>

<!--  -->

<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 1 Question 2</title>
    </head>
    <body>

    <!-- Outline of what this site will do  -->    
        <p>This page will request a date and calculate the days between the entered date and June 30, 2016.</p>
        <form action="" method="post">
    <!-- Input Section -->
            
            Enter a date: (YYYY-MM-DD) <input type="text" name="inputtedDate" value="" /><br/>
            <input type="submit" name="form1" value="Submit"/><br /><br />

        </form>
    </body>
</html>

<?php

    if ($dateCaluation != null)
    {
        echo "You enetered ". $_POST['inputtedDate'] . "<br /> <br />";
        
        $start_date = strtotime("2016-06-30"); 
        $end_date = $dateCaluation; 

        echo "Difference between June 30th 2016 and your entered date: " . ($end_date - $start_date)/60/60/24 . " days";
        

    }


?>


