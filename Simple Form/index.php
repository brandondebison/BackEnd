<?php
include_once("dbinfo.php");
// Creating Connection
$conn = mysqli_connect($db_host, $db_user, $db_password, "contactForm");

// Checking Connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
echo "Connected Successfully";

// Checking to see if form was submitted, if submited assign variables, then check for empty submissions. If there are empty boxes
// throw off an error message to show where the issue is.
$errors = false;

if ( isset( $_POST["form1"] ) ) {
    //if it has, retrieve each field
    $title = $_POST['title'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postalCode = $_POST['postalCode'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $newsLetter = $_POST['newsLetter'];


    // Error Checking Section
    $error_code = 0;
    if ( $title == null || empty($title) ) { $errors = true; $error_code=1; } else { $errors = false;}
    if ( $firstName == null || empty($firstName) ) { $errors = true; $error_code=2; } else { $errors = false;}
    if ( $lastName == null || empty($lastName) ) { $errors = true; $error_code=3; } else { $errors = false;}
    if ( $street == null || empty($street) ) { $errors = true; $error_code=4; } else { $errors = false;}
    if ( $city == null || empty($city) ) { $errors = true; $error_code=5; } else { $errors = false;}
    if ( $province == null || empty($province) ) { $errors = true; $error_code=6; } else { $errors = false;}
    if ( $postalCode == null || empty($postalCode) ) { $errors = true; $error_code=7; } else { $errors = false;}
    if ( $country == null || empty($country) ) { $errors = true; $error_code=8; } else { $errors = false;}
    if ( $phone == false || $phone == null || empty($phone) ) { $errors = true; $error_code=9; } else { $errors = false;}
    if ( $email == null || empty($email) ) { $errors = true; $error_code=10; } else { $errors = false;}

}

    if ( isset($_POST["form1"]) && $errors == false) {

        $sql = "CREATE TABLE IF NOT EXISTS registered_users (
            user_id int(11) NOT NULL AUTO_INCREMENT,
            title varchar(4) NOT NULL,
            firstName varchar(50) NOT NULL,
            lastName varchar(50) NOT NULL,
            street varchar(50) NOT NULL,
            city varchar(50) NOT NULL,
            province varchar(50) NOT NULL,
            postalCode varchar(7) NOT NULL,
            country varchar(20) NOT NULL,
            phone varchar(10) NOT NULL,
            email varchar(50) NOT NULL,
            newsLetter varchar(10) NULL,
            PRIMARY KEY (user_id)
        ) CHARSET=utf8mb4"; //CHARSET=utf8mb4 this one will allow almost any character into the database

        mysqli_query($conn,$sql);

        $sql = "INSERT INTO registered_users (title, firstName, lastName, street, city, province, postalCode, country, phone, email, newsLetter) VALUES ('$title', '$firstName', '$lastName', '$street', '$city', '$province', '$postalCode', '$country', '$phone', '$email', '$newsLetter')";

        mysqli_query($conn,$sql);

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Form </title>
        <style>table, th, td {  border: 1px solid black;} </style>
    </head>
    <body>

        <form action="" method="post" onsubmit="return checkform(this)">
        <br/>
        <!-- Input Section -->
            <label>Title</label>
            <select name="title"  >
                <option value=""></option>
                <option value="mr" >Mr.</option>
                <?php if ($title != null && $title=="Mr") echo " selected "; ?>

                <option value="mrs" >Mrs.</option>
                <?php if ($title != null && $title=="Mrs") echo " selected "; ?>

                <option value="ms" >Ms.</option>
                <?php if ($title != null && $title=="Ms") echo " selected "; ?>

                <option value="dr" >Dr.</option>
                <?php if ($title != null && $title=="Dr") echo " selected "; ?>

            </select>
            <?php if ( isset($_POST["form1"]) &&  ($title == null || empty($title)) ) echo " *required "; ?>

            <br/>

            <br />
                <input type="text" name="firstName" placeholder="" >First Name<br/>
                <?php if ( isset($_POST["form1"]) && empty($firstName)) echo " *required "; ?><br />

                <input type="text" name="lastName" placeholder="" >Last Name<br/>
                <?php if ( isset($_POST["form1"]) && empty($lastName)) echo " *required "; ?><br />

                <input type="text" name="street" placeholder="" >Street<br/>
                <?php if ( isset($_POST["form1"]) && empty($street)) echo " *required "; ?><br />

                <input type="text" name="city" placeholder="" >City<br/>
                <?php if ( isset($_POST["form1"]) && empty($city)) echo " *required "; ?><br />

                <input type="text" name="province" placeholder="">Province<br/>
                <?php if ( isset($_POST["form1"]) && empty($province)) echo " *required "; ?><br />

                <input type="text" name="postalCode" placeholder="">Postal Code<br/>
                <?php if ( isset($_POST["form1"]) && empty($postalCode)) echo " *required "; ?><br />

                <label>Country</label>
                <select name="country"  >
                    <option value=""></option>
                    <option value="canada" >Canada</option>
                    <option value="usa" >USA</option>
                </select><br />
                <?php if ( isset($_POST["form1"]) &&  ($country == null || empty($country)) ) echo " *required "; ?>

                <br/>

                <input type="text" name="phone" placeholder="">Phone Number<br/>
                <?php if ( isset($_POST["form1"]) && empty($phone)) echo " *required "; ?><br />

                <input type="text" name="email" placeholder="">Email Address<br/>
                <?php if ( isset($_POST["form1"]) && empty($email)) echo " *required "; ?><br />

                <input type="checkbox" name="newsLetter" value="Yes">News Letter<br/>


            <!-- Submit button -->
            <input type="submit" name="form1" value="Submit" /><br /><br /><br />

        </form>

             <!--  Output Section for the table -->
             <?php
                echo " <div>";
                echo " <table style='marginTop:16, border: 1px solid black box' >";
                echo " <thead> ";

                echo "  <tr>";
                echo "      <th>User Id</th>";
                echo "      <th>Title</th>";
                echo "      <th>First Name</th>";
                echo "      <th>Last Name </th>";
                echo "      <th>Street</th>";
                echo "      <th>City</th>";
                echo "      <th>Province</th>";
                echo "      <th>Postal Code</th>";
                echo "      <th>Country</th>";
                echo "      <th>Phone Number</th>";
                echo "      <th>Email</th>";
                echo "      <th>News Letter</th>";
                echo "  </tr>";
                echo "  </thead>";



                    $sql = "SELECT * FROM registered_users ";

                    $results = mysqli_query($conn,$sql);

                    // Loop to get all of the data from SQL
                    while($row = mysqli_fetch_assoc($results)){
                        $tempId = $row['user_id'];
                        $tempTitle = $row['title'];
                        $tempFName = $row['firstName'];
                        $tempLName = $row['lastName'];
                        $tempStreet = $row['street'];
                        $tempCity = $row['city'];
                        $tempProvince = $row['province'];
                        $tempPostalCode = $row['postalCode'];
                        $tempCountry = $row['country'];
                        $tempPhone = $row['phone'];
                        $tempEmail = $row['email'];
                        $tempNewsLetter = $row['newsLetter'];

                        echo "  <tbody>";
                        echo "  <tr>";
                        echo "       <td>". $tempId ."</td>";
                        echo "       <td>". $tempTitle ."</td>";
                        echo "       <td>". $tempFName ."</td>";
                        echo "       <td>". $tempLName ."</td>";
                        echo "       <td>". $tempStreet ."</td>";
                        echo "       <td>". $tempCity ."</td>";
                        echo "       <td>". $tempProvince ."</td>";
                        echo "       <td>". $tempPostalCode ."</td>";
                        echo "       <td>". $tempCountry ."</td>";
                        echo "       <td>". $tempPhone ."</td>";
                        echo "       <td>". $tempEmail ."</td>";
                        echo "       <td>". $tempNewsLetter ."</td>";
                        echo "  </tr>";

                        echo "</tbody>";
                    }

                echo " </table> " ;
                echo "</div> " ;

            mysqli_close($conn);

            ?>

    </body>
</html>
