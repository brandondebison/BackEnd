<!-- Brandon Debison -->
<!-- INET 2005 -->
<!-- Assignment 1 -->
<!--  -->

<?php 
/*
Instructions
Create a HTML form that allows a user to enter a school mark/grade. After pressing submit, use PHP to execute the following tasks:
If no value is entered, print an error message.
If the value is numeric, use a nested if statement to display the corresponding letter Grade according to the following:
A:  85-100
B:  75-84.99
C:  60-74.99
F:  0-59.99.
If the mark is not numeric, use a switch statement to display the mark range the grade corresponds to (see above table).
*/
    
    // Checking to see if the form has been posted
    if (isset( $_POST['form1'] ) ) {        
        $input = $_POST['input'];      
    } 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 2 Question 1</title>
    </head>
    <body>
    
<!-- Outline of what this site will do  -->    
        <p>This page will request either a number grade or letter. Once submitted the site will deteremine what the number 
            grade is in a letter grade or what range of numbers are equal to a letter grade.</p><br/>
        <form action="" method="post">
            
            Enter a number or letter grade: <input type="text" name="input" value="" required /> <br/>
            
            <input type="submit" name="form1" value="Submit"/><br /><br />

        </form>
    </body>
</html>

<?php

    // Delaying the output until something has been posted to the form. Then running through the if's or switch to find out what entry it was
    // Error should it be the wrong entry 

    if (isset( $_POST['form1'] ) ) {

        if (is_numeric($input) && $input >= 0 && $input <= 100){
            echo "You have entered $input <br/>";
            if ($input >= 85 && $input <= 100){
                echo "Your grade is A <br/>";
            } else if ($input >= 75 && $input <= 84.99) {
                echo "Your grade is B <br/>";
            } else if ($input >= 60 && $input <= 74.99) {
                echo "Your grade is C <br/>";
            } else if ($input >= 0 && $input <= 59.99) {
                echo "Your grade is F <br/>";
            }
        } else if (strlen($input) == 1){

            echo "You have entered $input <br/>";

            switch ($input) {
                case a: echo "$input is between 85 - 100"; break;
                case A: echo "$input is between 85 - 100"; break;
                case b: echo "$input is between 75 - 84.99"; break;
                case B: echo "$input is between 75 - 84.99"; break;
                case c: echo "$input is between 60 - 74.99"; break;
                case C: echo "$input is between 60 - 74.99"; break;
                case f: echo "$input is between 0 - 59.99"; break;
                case F: echo "$input is between 0 - 59.99"; break;  
                default: echo "Invalid Entry"; break;
            } 
        } else {
            echo "Invalid Entry"; 
        }   
    }   
?>