<?php
$a1=@$_GET[t1];
$a2=@$_GET[t2];


mysql_connect("localhost","root"); //this is for table making 

mysql_select_db("b.techa"); //http//localhost/myadmin is site p


mysql_query("insert into login values('$a1','$a2')");
echo"User created";
?>