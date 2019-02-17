<html>
    <head>
	 <title>
	 a44.php
	   </title>
	  </head>
 <body>
<form name=frm method=get action=a45.php>  
Enter User Id<input type=text name=t1><br>
Enter Old Password<input type=text name=t2><br>
       <input type=submit><br>
	   <?php
	   $a=@$_GET[x]; //for update new id and password in mysql without use of new and old
	   if($a==1)
	   {
	echo"<font color=red>Invalid id or password</font>";
	}
	if($a==2)
	{
	echo"<font color=blue>Password update succesfully</font>";
	}
	?>
	</form>
	</body>
	</html>