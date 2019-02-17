<?php
mysql_connect("localhost","root");
mysql_select_db("foruma");
$a1=@$_GET[t1];
$a2=@$_GET[t2];
$a3=@$_GET[t3];
$a4=@$_GET[t4];
$a5=@$_GET[t5];
$a=mysql_query("select * from users where rn='$a1'");
$b=mysql_num_rows($a);
if($b==0)
{
	mysql_query("insert into users values('$a1','$a2','$a3','$a4','$a5')");
	header("location:login.php?x=1");
}
else
{
	header("location:sign.php?x=2");
}
?>