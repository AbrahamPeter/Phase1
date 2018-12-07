<?php
//db connection

$conn= mysqli_connect("localhost","root","");
    if(!$conn)
    {
        die("DataBase Connection failed".mysqli_connect_error());
    }
   // db created
$db_select=mysqli_select_db($conn,"team");
    if(!$db_select)
    {
        die("DataBase is not selected".mysqli_connect_error());

    }

?>
