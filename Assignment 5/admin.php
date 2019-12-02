<?php
    session_start(); 

    $user_id = $_SESSION['user_id'];
    $session_id = $_SESSION['session_id'];
    $login_id = $_SESSION['login_id'];

    $dbHost = "localhost:8889";
    $dbUser = "root";
    $dbPassword = "root";
    $db = "unit_7"; 

    $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $db );
    if (!$conn) {
        die ('Connection Failed');
    } else {
        echo "Connection Established "; 
    }

    $sqlLogin = "SELECT * FROM login_sessions WHERE user_id = '$user_id' AND session_id = '$session_id' ";

    $result = mysqli_query($conn, $sqlLogin); 

    $row = mysqli_fetch_assoc($result);

    $tempSess = $row['session_id'];
    $tempID = $row['user_id'];
    

        echo"<br/>";
        echo"<br/>";

        echo"<br/>";



        if ( $session_id == $tempSess && $user_id == $tempID ) {

            $currentTime = time();

            $sqlUpdate = "UPDATE login_sessions SET last_access_time = $currentTime WHERE user_id = $user_id AND session_id = '$session_id'";
    
            $result = mysqli_query($conn, $sqlUpdate);
    
            echo "Welcome! \n<br/>";
    
    
        } else {
            header("Location:http://localhost:8888/Assignment%205/Assigment5sessions.html");
        }


        echo"<br/>";

     echo "User id " . $_SESSION['user_id'] . " Session Id: " . $_SESSION['session_id'] ;
     echo"<br/>";

     echo "User id " . $user_id . " Session Id: " . $session_id ;





?>