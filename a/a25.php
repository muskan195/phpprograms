<?php
function f1($a)
{
   echo"table of $a is <br>";
for($i=1;$i<=10;$i++)
{
$b=$a*$i;
echo"$a*$i=$b<br>";
   }

}
f1(5);        /* for creating the table*/
?>  