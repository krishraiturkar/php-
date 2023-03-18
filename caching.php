<?php
//fetching data from databse by post http protocole
if(isset($_POST{'student-name'}))
{
$student = $_POST['student-name']; 
$father = $_POST['father'] ;
$mother = $_POST['mother'] ;
$admission = $_POST['Admisson']; 
$roll = $_POST['number'] ;
$gender = $_POST['gender']; 
echo"$student<br>$father<br>$mother<br>$admission<br>$roll<br>$gender";
}
else
{
    echo"sorry we are fail to fetch the information";
}
//object for the data base connection
$db_server ="localhost";
$db_username = "root";
$db_password = "";
$db_name = "login informatiion";
//database connection
$conn = mysqli_connect($db_server,$db_username,$db_password,$db_name);
//database connected or not 
if(mysqli_connect_error())
{
    echo"connections failed<br>";
}
else
{
    echo"connection sucessfully<br>";
}
//inserting data in database
$inser = "INSERT INTO `student table`(`STUDENT NAME`, `FATHER NAME`, `MOTHER NAME`, `ADMISSON NO`, `ROLL`, `GENDER`) 
VALUES ('$student','$father','$mother','$admission','$roll','$gender')";
$check = mysqli_query($conn,$inser);
//cheaking data is inserted or not
if($check)
{
    echo"data is inserted in data base";
}
else
{
    echo"data is not inserted in database";
}
?>