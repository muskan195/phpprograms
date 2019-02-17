<html>
	<head>
		<title>
		</title>
	</head>
	<body>
	<center>
		<table>
			<tr><td colspan=3>
<a href=index.php><img src=header.png height=150 width=100%></a>
			</td></tr>
			<tr><td colspan=3><hr></td></tr>
<tr>
	<td colspan=3>
	<form name=frm2 action=sign1.php>
		<table>
		<tr><td colspan=2><font color=blue size=5><center>New Users Sign up here</center></font></td></tr>
			<tr><td>Enter Roll no.</td><td><input type=text name=t1 maxlength=10></td></tr>
			<tr><td>Enter Password</td><td><input type=text name=t2></td></tr>
			<tr><td>Enter Name</td><td><input type=text name=t3></td></tr>
			<tr><td>Select Department</td><td><select name=t4><option>CS</option><option>IT</option></select></td></tr>
			<tr><td>Select Year</td><td><select name=t5><option>1 Year</option><option>2 Year</option><option>3 Year</option><option>4 Year</option></select></td></tr>
			<tr><td><input type=submit></td><td></td></tr>
			<?php
			$a=@$_GET[x];
			if($a==2)
			{
				echo"<tr bgcolor=yellow><td colspan=2><font color=red><center>User Already exists</center></font></td></tr>";
			}
			?>
		</table>
		</form>
	</td>
</tr>
		</table>
		</center>
	</body>
</html>