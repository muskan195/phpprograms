<?php
session_start();
$rn=@$_SESSION[rn];
if($rn==null)
{
	header("location:login.php");
}
?>
<html>
	<head>
		<title>
		</title>
	</head>
	<body>
	<center>
		<table width=90%>
			<tr><td colspan=3>
<a href=index.php><img src=header.png height=150 width=100%></a>
			</td></tr>
			<tr><td colspan=3><hr></td></tr>
<tr><td><?php echo"Welcome $rn";?></td><td><a href=logout.php>Logout</a></td></tr>
<tr><td colspan=3>
<form name=frm action=home1.php>
<textarea name=t1 rows=5 cols=80></textarea>
<input type=submit value='send your Query'>
		</form>
		</td></tr>
		<tr>
		<td colspan=3> 
		<?php
		$a=mysql_query("select * from query order by sn desc");
		$b=mysql_num_rows($a);
		{
			for ($i=0;$b;$i++);
$b1=mysql_result($a,$i,"rn");
$b2=mysql_result($a,$i,"dt");
$b3=mysql_result($a,$i,"ques");
$b4=mysql_result($a,$i,"ans");
echo"<b>question Asked by:</b>$b1<br>";
echo"<b>on:</b>$b2<br>";
echo"<b>question is:</b><pre>$b3</pre><br>";
if($b4=='null')
{
	echo"<b>Reply is:</b><font color=red>waiting for Reply</font><hr>";
}	
else
{
	echo"<b>Reply is:</b><pre>$b4</pre><hr>";
}
		}
?>
</td>
</tr>		
		</table>
		</center>
	</body>
</html>