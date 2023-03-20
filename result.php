<?php
//database connection oops method
$server = "localhost";
$username ="root";
$password = "";
$name = "login informatiion";
$conn = mysqli_connect($server,$username,$password,$name);
if(mysqli_connect_error())
{
    echo"mysqli connection failed";
}
else
{
    echo"mysqli connection sucessful<br>";
} 
//targating the database for table and its colume 
  $result ="SELECT `STUDENT NAME`, `FATHER NAME`, `MOTHER NAME`, `ADMISSON NO`, `ROLL`, `GENDER` FROM `student table` WHERE 1";
   $showing = mysqli_query($conn,$result);
   $fetching = mysqli_fetch_assoc($showing);
   $row = mysqli_num_rows($showing);
   echo "id:".$showing['0']"-NAMEE".$showing['1']."".$showing['2']."".$showing['3']."".$showing['4']."".$showing['5']."<BR>";
?>