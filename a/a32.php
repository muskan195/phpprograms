<?php
$a1=@$_GET[t1];
$a2=@$_GET[t2];
if($a2==12345)
{
  header("location:a33.php?x=$a1");
}
  
  else
 
 {
  header("location:a31.php?x=1");
 }
 ?>