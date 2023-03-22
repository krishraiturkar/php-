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
  $connit ="SELECT `STUDENT NAME`, `FATHER NAME`, `MOTHER NAME`, `ADMISSON NO`, `ROLL`, `GENDER` FROM `student table` WHERE 1";
   $showing = mysqli_query($conn,$connit);
   $result = mysqli_num_rows($showing);
   echo "$result";
   while($result=$fetching=mysqli_fetch_assoc($showing))
   {
        echo "STUDENT NAME:".$fetching['STUDENT NAME']."_FATHER NAME:".$fetching['FATHER NAME'].
        "_MOTHER NAME:".$fetching['MOTHER NAME']."_ROLL NO:".$fetching['ROLL']."_ADIMISSON NO:"
        .$fetching['ADMISSON NO']."_GENDER:".$fetching['GENDER']."<BR>";
   }
?>