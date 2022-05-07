<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, "zoo");
$name = strval($_POST['txtname']);
$age = intval($_POST['txtage']);
$phnum = strval($_POST['txtphnum']);
$ticket = intval($_POST['txtnot']);
$date = date('Y-m-d', strtotime($_POST['dt']));
$query = "Insert into ticket values('$name','$age',$phnum,'$ticket','$date');";
if(mysqli_query($conn,$query))
{
    echo "Ticket Booked ";
}
else
{
    echo "Ticket Not Booked Try Again";
}
?>