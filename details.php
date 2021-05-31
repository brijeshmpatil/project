<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="details";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) 
{
  die("Connection Failed: " . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phoneNumber = $_POST['phoneNumber'];
    $employeeId = $_POST['employeeId'];
    $salary = $_POST['salary'];

    $sql_query = "INSERT INTO details (name,age,phoneNumber,employeeId,salary) VALUES ('$name','$age','$phoneNumber','$employeeId','$salary')";

    if (mysqli_query($conn, $sql_query))
    {
        echo "New Details Entry Inserted Successfully !";
    }
    else
    {
        echo "Error:" . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);

}
?>