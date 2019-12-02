<!-- Brandon Debison -->
<!-- INET 2005 -->
<!-- Assignment 1 -->

<?php
    $decNumber = 0.0;

    // Checking to see if the form has been posted
    if (isset($_POST[form1])){
        $decNumber = $_POST["inputNum"];
    }

?>

<!--  -->
<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 1 Question 1</title>
    </head>
    <body>
    
    <!-- Outline of what this site will do  -->    
        <p>This page will request a decimal number, and apply functions ceil, floor, and round functions before outputting to the screen.</p>
        <form action="" method="post">
    <!-- Input Section -->
            
            Enter a decimal number*: <input type="text" name="inputNum" value="" required/> <br />
            <input type="submit" name="form1" value="Submit"/>
            <br />
            <br />

        </form>
    </body>
</html>
<?php

    // Functions for Ceiling, Floor, and round 
    if ($decNumber != 0)
    {
        echo "You enetered $decNumber <br />";
        $ceilNumber = ceil($decNumber);
        echo "The Ceiling function produced $ceilNumber<br />";
        $floorNumber = floor($decNumber);
        echo "The Floor function produced $floorNumber<br />";
        $roundNumber = round($decNumber);
        echo "The Round function produced $roundNumber<br />";
    }


?>
