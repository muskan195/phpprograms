<html>
    <head>
	 <title>
	 a42.php
	   </title>
	  </head>
 <body>
<form name=frm method=get action=a43.php>  
Enter User Id<input type=text name=t1><br>
Enter Old Password<input type=text name=t2><br>
Enter New Password<input type=text name=t3><br>
       <input type=submit><br>
	   <?php
	   $a=@$_GET[x]; //for update new id and password in mysql
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