<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, "zoo");

$date = date('Y-m-d', strtotime($_POST['dt1']));
$query = "select SUM(no_of_ticket) from ticket where date_visit='$date';";
$exequery = mysqli_query($conn, $query);
if(mysqli_num_rows($exequery)>0)
{
    while($row = mysqli_fetch_array($exequery))
    {
        echo "No. of tickets booked on ".$date." are ". $row['SUM(no_of_ticket)'];
    }
}
?>