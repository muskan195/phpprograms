<?php
session_start();
mysql_connect("localhost","root");
mysql_select_db("foruma");
$a1=@$_GET[t1];
$a2=@$_GET[t2];
$a=mysql_query("select * from users where rn='$a1' and pwd='$a2' ");
$b=mysql_num_rows($a);
if($b==0)
{
	header("location:login.php?x=3");
}
else
{
	$_SESSION[rn]=$a1;
	header("location:home.php");
}
?>