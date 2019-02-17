<?php
session_start();
$a=@$_SESSION[uid];
if($a==null)
{
header("location:a34.php?x=1");	
}
echo"welcome $a to inbox";
echo"<p align=right><a href=a37.php>
logout</a></p>";
?>