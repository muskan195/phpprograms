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
	<form name=frm2 action=login1.php>
		<table>
		<tr><td colspan=2><font color=blue size=5><center>Users Please login here</center></font></td></tr>
			<tr><td>Enter Roll no.</td><td><input type=text name=t1 maxlength=10></td></tr>
			<tr><td>Enter Password</td><td><input type=text name=t2></td></tr>

			<tr><td><input type=submit></td><td></td></tr>
			<?php
						$a=@$_GET[x];
						if($a==1)
						{
							echo"<tr bgcolor=yellow><td colspan=2><font color=blue><center>User Created Succesfully . Please Login again</center></font></td></tr>";
						}
						if($a==3)
						{
							echo"<tr bgcolor=yellow><td colspan=2><font color=red><center>Invalid Id/Password</center></font></td></tr>";
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