
<?php
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
$db_server ="mysql:host=localhost;dbname=login informatiion";
$db_username = "root";
$db_password = "";
$conn = new PDO($db_server,$db_username,$db_password);
$inser = "INSERT INTO `student table`(`STUDENT NAME`, `FATHER NAME`, `MOTHER NAME`, `ADMISSON NO`, `ROLL`, `GENDER`)
VALUES ($student,$father,$mother,$admission,$roll,$gender)";
$coor = ($conn$inser);
if($coor)
{
    echo"connceton sucessfully";
}
else
{
  echo"connection error";
}
?>