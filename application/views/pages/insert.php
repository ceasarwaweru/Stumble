<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "stumble");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Escape user inputs for security
$first_name = $mysqli->real_escape_string($_REQUEST['first_name']);
$password = $mysqli->real_escape_string($_REQUEST['password']);
$email = $mysqli->real_escape_string($_REQUEST['email']);

// attempt insert query execution
$sql = "INSERT INTO USERS (firstName, email, password) VALUES ('$first_name', '$email', '$password')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
    header("Location: localhost:stumble/posts");
}else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>
