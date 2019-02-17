<?php
mysql_connect("localhost","root");
mysql_select_db("b.techa"); // here display all data from mysql
$a=mysql_query("select * from login");//by show all rows and coulmn , to fetch the data
$b=mysql_num_rows($a);

for($i=0;$i<$b;$i++)
{

$a1=mysql_result($a,$i,"uid");
echo"User Id is $a1<br>";
$a2=mysql_result($a,$i,"pwd");
echo"password is $a2<hr>";
}
?>