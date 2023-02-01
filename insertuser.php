<?php

include "connect.php";

function InsertUser($name) {
    $mysqlDB  = connectDB();
    $sentence = "INSERT INTO user (name) VALUES ('$name')";
    
    if ($mysqlDB->query($sentence)) {
        echo "$name. New record created successfully";
    } else {
        echo "Error: " . $sentence . "<br>" . $mysqlDB->error;
    }

    disconnectDB($mysqlDB);
}

if(isset($_POST['username'])) {
    $username = $_POST['username'];
    if (strlen($username) > 0) InsertUser($username);
}

header('Location: index.html');

?>