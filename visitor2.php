<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, "zoo");

$phnum = strval($_POST['txtphnum']);
$query = "select * from ticket where phone_number='$phnum';";
$exequery = mysqli_query($conn, $query);
if(mysqli_num_rows($exequery)>0)
{
    while($row = mysqli_fetch_array($exequery))
    {
        echo "Ticket Details: <br>";
        echo "Name: ". $row['Name']."<br>";
        echo "Age: ". $row['Age']."<br>";
        echo "Ph.: ". $row['Phone_number']."<br>";
        echo "Tickets: ". $row['No_of_ticket']."<br>";
        echo "Date: ". $row['Date_visit']."<br>";
    }
}
?>