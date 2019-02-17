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
	<form name=frm2 action=admin1.php>
		<table>
		<tr><td colspan=2><font color=blue size=5><center>Admin Please login here</center></font></td></tr>
			<tr><td>Enter User Id</td><td><input type=text name=t1 maxlength=10></td></tr>
			<tr><td>Enter Password</td><td><input type=text name=t2></td></tr>

			<tr><td><input type=submit></td><td></td></tr>
			<?php
									$a=@$_GET[x];
									if($a==4)
									{
										echo"<tr bgcolor=yellow><td colspan=2><font color=red><center>Admin Id/Password invalid</center></font></td></tr>";
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