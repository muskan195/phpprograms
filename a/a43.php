<?php
$a1=@$_GET[t1];
$a2=@$_GET[t2];
$a3=@$_GET[t3];

mysql_connect("localhost","root");
mysql_select_db("b.techa");

$a=mysql_query("select * from login where uid='$a1' and pwd='$a2'");
$b=mysql_num_rows($a);

if($b==0)
{
    header("location:a42.php?x=1");
}
else
{
mysql_query("update login set pwd='$a3'where uid='$a1'");
header("location:a42.php?x=2");
}
?>