<html>
  <head>
   <tittle>
    </tittle>
</head>
   <body>
<form name=frm1 method=post>
<input  type=text name=t1><br><br>
<input type=submit>
</form><hr>
<?php
$a=@$_POST[t1];
$b=strtolower($a);
$c=strtoupper($a);
echo"$a<br>$b<br>$c";
?>
</body>
</html>