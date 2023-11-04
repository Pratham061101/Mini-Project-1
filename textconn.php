<?php

echo "Connection Test";

$servername ="localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

//If Connection Die
if (!$conn){
    die("Sorry! unable to connet the server:". mysqli_connect_error());
}
else{
    echo "Connection Sucessfull";
}

?>