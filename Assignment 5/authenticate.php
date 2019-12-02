<?php 

    $dbHost = "localhost:8889";
    $dbUser = "root";
    $dbPassword = "root";
    $db = "unit_7"; 
    session_start(); 

    $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $db );
    if (!$conn) {
        die ('Connection Failed');
    } else {
        echo "Connection Established </br>"; 
    }


    if ( isset( $_POST["form1"] ) ) {
        //if it has, retrieve each field
        $username = $_POST['username'];      
        $password = $_POST['password'];      

    }

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql); 
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['user_id'];
    $session_id = session_id();

    $sqlSess = "SELECT * FROM login_sessions WHERE user_id = '$user_id' AND session_id = '$session_id' ";
    $resultSess = mysqli_query($conn, $sqlSess); 
    $rowSess = mysqli_fetch_assoc($resultSess);

    $sessionTest = $rowSess['session_id'];


    if ($row) {

        if ( session_id() == $sessionTest ) {
            $user_id = $row['user_id'];
            $_SESSION['user_id'] = $user_id;
            $_SESSION['session_id'] = $session_id;

            header("Location:http://localhost:8888/Assignment%205/admin.php");
        
        } else if ( session_id() != $sessionTest ) {

            $usernameR = $row['username'];
            $passwordR = $row['password'];
            $user_id = $row['user_id'];

            $session_id = session_id();
            $currentTime = time();

            $_SESSION['user_id'] = $user_id;
            $_SESSION['session_id'] = $session_id;

            if ( session_id() != $sessionTest ) {
                $sql = "INSERT INTO login_sessions (user_id, session_id, last_access_time) VALUES ($user_id,'$session_id','$currentTime')";
                mysqli_query($conn, $sql);
            }

            header("Location:http://localhost:8888/Assignment%205/admin.php");

        }

    } else {

       header("Location:http://localhost:8888/Assignment%205/Assigment5sessions.html");
    }



?>