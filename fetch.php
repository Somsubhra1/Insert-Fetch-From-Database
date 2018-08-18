<?php

$con = mysqli_connect("localhost", "root", "", "data"); // Change to database address, username, password, database name

if (!$con)
{
    die("No connection");
}

$sql = "SELECT id, Name, Pass FROM tab";
$out = mysqli_query($con, $sql);

echo "ID:". '&nbsp &nbsp'. "Name:". '&nbsp &nbsp'. "Pass:<br>";

if (mysqli_num_rows($out) != 0)
{    
    while($item = mysqli_fetch_assoc($out))
	{
        echo $item["id"].'&nbsp &nbsp &nbsp &nbsp'. $item["Name"].'&nbsp &nbsp &nbsp '. $item["Pass"]. "<br>";
    }
} 
else 
{
    echo "No result";
}

mysqli_close($con);
?>