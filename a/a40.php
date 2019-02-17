<?php
mysql_connect("localhost","root");
mysql_select_db("b.techa"); // here show the data name from mysql in web"display the first row"
$a=mysql_query("select * from login");

$a1=mysql_result($a,0,"uid");
echo"User Id is $a1<br>";


$a2=mysql_result($a,0,"pwd");
echo"password is $a2<br>";
?>