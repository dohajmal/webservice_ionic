<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $user = $request->username;
    $email = $request->email;
    $pass = $request->password;

    $servername = "localhost";
    $username = "jack";
    $password = "1234";
    $dbname = "chat";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO use_directory VALUES ('', '$user', '$email', '$pass');" ;
    $retval = $conn->multi_query($sql);

    if( $retval === TRUE) {
        echo "Add successfully\n";
    }else { 
        die('Could not edit data');
    }
?>