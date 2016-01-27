<html>
<head>
<title>Sports</title>
</head>
<link rel="shortcut icon" href="./Logo.jpg">
<body>
<?php
$id=$_GET['nm'];
include("up.php");
?>

<center>
<div class="two">
<div class="three">
<hr color="red" />
<font color="#22f099" size="6"><?php
    $link=mysqli_connect("localhost","root","","db1");
	$qry="select * from collect where id like'sp%'";
	$result=mysqli_query($link,$qry);
	$b=".jpg";
 while($res=mysqli_fetch_row($result))
{
	$c="$res[4]"."$
All Sports Collection
</font>
<hr color="red" />
</div>
b";
echo "<table class=\"one\" cellspacing=\"1px\">
<tr>
<td align=\"center\">
<img class=\"one\" src='./product/electronics/$c' />
</td>
</tr>
<tr>
<p>
<td align=\"center\">
<br>
";
echo "<p><a href=\"http://localhost/AI/Final/Main/cart.php?ids=$res[0]\" class=\"five\">
<font color=\"cc4400\" size=\"6\">$res[2]
<br>
</font>
<br>
<font color=\"#cc0288\" size=\"6\">
<b>Rs.$res[3]</b>
</a>
<hr />
</font>
</td>
</tr>
</table>";
}
echo "</div>";

 include("footer.php");

?> 

</body>
</html>