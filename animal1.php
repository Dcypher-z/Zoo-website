<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, "zoo");


$animal = strval($_POST['txt1']);
$query = "select* from animal where name like '%$animal%';";
$exequery = mysqli_query($conn, $query);

if(mysqli_num_rows($exequery)>0)
{
    while($row = mysqli_fetch_array($exequery))
    {
        echo "Name: ". $row['Name']." <br>";
        echo "Area: ". $row['area']." m^2 <br><br>";
    }
}
?>