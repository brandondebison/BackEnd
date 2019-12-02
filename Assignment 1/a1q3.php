<!-- Brandon Debison -->
<!-- INET 2005 -->
<!-- Assignment 1 -->


<?php
    
    // Checking to see if the form has been posted
    if (isset( $_POST['form1'] ) ) {        
        $x = $_POST['x'];
        $y = $_POST['y'];
    }

?>

<!--  -->

<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 1 Question 3</title>
    </head>
    <body>
    
<!-- Outline of what this site will do  -->    
        <p>This page will request two numbers. Once submitted the site will add, subtract, multiply, and divide them</p>
        <form action="" method="post">
            
            Enter the first number: <input type="text" name="x" value="" /> <br/>
            Enter the second number: <input type="text" name="y" value="" /> <br/>

            <input type="submit" name="form1" value="Calculate"/><br /><br />

        </form>
    </body>
</html>

<?php

    // Delaying the output until something has been posted to the form. Then calling the functions to complete calculations

    if (isset( $_POST['form1'] ) ) {

        $result1 = addThem($x, $y);
        echo "$x plus $y is $result1 <br/> <br/>";

        $result2 = subThem($x, $y);
        echo "$x subtract $y is $result2 <br/> <br/>";

        $result3 = mulThem($x, $y);
        echo "$x multipled by $y is $result3 <br/> <br/>";

        $result4 = divThem($x, $y);
        echo "$x divided by $y is $result4 <br/> <br/>";

    }

    // Function section for addition, subtraction, mulitplcation, and division
    // Add Function 
    function addThem(int $x,int $y) {
        return $x + $y;     
    }
    // Subtraction Function 
    function subThem(int $x,int $y) {
        return $x - $y;
    }
    // Multiply Function 
    function mulThem(int $x,int $y) {
        return $x * $y;
    }
    // Division Function 
    function divThem(int $x,int $y) {
        return $x / $y;
    }
?>
