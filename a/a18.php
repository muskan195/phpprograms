<html>
   <head>

   <tittle>
<a18.php>
      </tittle>
</head>
          <body>

  <form name=frm1 method=post>
Enter name<input type=text name=t1><br>
Enter password
<input type=password name=t2><br>
<input type=submit>
</form><br>
<?php
$a1=@$_POST[t1];
$a2=@$_POST[t2];
if($a1!=null)
{
echo"name is $a1<br>";
echo"password is $a2";

}
?>
</body>
</html>
  