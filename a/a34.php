<html>
    <head>
     <title>
	 a34.php
 	    </title>
		</head>
		 <body>
<form name=f1 action=a35.php method=get>
Enter User Id<input type=text name=t1><br>
Enter Password <input type=text name=t2><br>
<input type=submit><br>
<?php
$a=@$_GET[x];
if($a==1)
{
echo"<font color=red>Invalid Id and Password </font>";
}
?>
</form>
     </body>
           </html>
		   