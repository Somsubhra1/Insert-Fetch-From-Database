<?php

$con = mysqli_connect("localhost", "root", "", "data"); // Change to database address, username, password, database name

if (!$con)
{
    die('Connection error');
}

$name=$_POST['username'];
$pass=$_POST['pass'];

$sql = "INSERT INTO tab (Name,Pass) VALUES ('$name', '$pass')";

if (mysqli_query($con, $sql))
{
    echo "Insertion success";
} 

else
{
    echo "Error in inserting";
}

mysqli_close($con);

?>