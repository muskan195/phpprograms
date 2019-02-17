<html>
    <head>
	<title>
 	    </title>
		a31.php
		</head>
		 <body>
<form name=f1 action=a32.php method=get>
Enter User Id<input type = text name=t1><br>
Enter Password <input type=text name=t2><br>
<input type=submit><br>
<?php
$a=@$_GET[x];
if($a==1)
{
echo"<font color=red>invalid Id and Password</font>";
}
?>
</form>
     </body>
           </html>
		   