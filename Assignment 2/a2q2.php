<!-- Brandon Debison -->
<!-- INET 2005 -->
<!-- Assignment 1 -->
<!--  -->

<?php 

/*
Create a HTML form that allows a user to choose a pizza size and a number of toppings. Use a dropdown field for size (extra-large, large, medium, and small) 
and a checkbox field for each topping (pepperoni, cheese, olive, pineapple, and ham). Retrieve the user's selections and calculate their overall price 
based on the following criteria:
A small pizza is $9.00
A
Each topping adds $1.00 to the total cost of the order (except cheese is free).
Display the size and toppings ordered along with the total cost of the order.
*/

    if (isset( $_POST['form1'] ) ) {        
        $size = $_POST['pizzaSize'];      
        $pepperoni = $_POST['pepperoni'];
        $cheese = $_POST['cheese'];
        $olive = $_POST['olive'];
        $pinapple = $_POST['pinapple'];
        $ham = $_POST['ham'];

    } 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 2 Question 2</title>    
    </head>
    <body>
    
    <!-- Outline of what this site will do  -->    
        <p>This page will request two numbers. Once submitted the site will add, subtract, multiply, and divide them</p>
        <form action="" method="post">
            
        
        <!-- size selection section --> 
            <select name="pizzaSize" required >
                <option value=""></option>
                <option value="Small" >Small</option>
                <option value="Medium" >Medium</option>
                <option value="Large" >Large</option>
                <option value="Extra Large" >Extra-Large</option>
            </select>
            <br/>

            <!-- Checkbox section -->
            <br />
                <input type="checkbox" name="pepperoni" value="true">Pepperoni<br>
                <input type="checkbox" name="cheese" value="true">Cheese<br>
                <input type="checkbox" name="olive" value="true">Olive<br>
                <input type="checkbox" name="pinapple" value="true">Pinapple<br>
                <input type="checkbox" name="ham" value="true">Ham<br>

            <!-- Submit button -->
            <input type="submit" name="form1" value="Calculate"/><br /><br />

        </form>
    </body>
</html>

<?php
    $total =0;
    
    if (isset( $_POST['form1'] ) ) {

        // Setting the price for the size of the pizza 
        if ($size == "Small" ) {$total = $total +9;}
        if ($size == "Medium" ) {$total = $total +12.5;}
        if ($size == "Large" ) {$total = $total +15;}
        if ($size == "Extra Large" ) {$total = $total +17.5;}

        // Setting output for Cheese 
        if ($cheese == true) {$topping1 = "Cheese, ";}

        // Setting other topping outputs along with costs 
        if ($pepperoni == true ) {$total = $total +1;$topping2 = "Pepperoni, ";}
        if ($olive == true ) {$total = $total +1; $topping3 = "Olives, ";}
        if ($pinapple == true ) {$total = $total +1; $topping4 = "Pinapple, ";}
        if ($ham == true ) {$total = $total +1; $topping5 = "Ham ";}

        // Output to the screen to update the user 
        echo "The total cost of your order for $size pizza with $topping1 $topping2 $topping3 $topping4 $topping5 is $total";
    }

?>
