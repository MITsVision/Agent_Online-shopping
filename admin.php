<html>
<head>
<title>Admin</title>
</head>
<body>


<?php
if(isset($_POST['sub1']))
{
$id=$_POST['name1']." ".$_POST['name2'];
$type=$_POST['name3'];
$name=$_POST['name4'];
$price=$_POST['name5'];
$img_name=$_POST['name5'];
$desc=$_POST['name6'];

    $link=mysqli_connect("localhost","root","","db1");
	$qury="insert into collect values('$id','$type','$name','$price','$img_name','$desc')";
	$sub=mysqli_query($link,$qury);
echo"<font font-size='5'>";
if($sub)
	echo "<font font-size='5'>Record inserted successfully";
else
	echo "Failed......";
echo"</font>";
}
?>

<form action="./admin.php" method=POST >
<table border=2 bordercolor=#55aa11 cellspacing=2 cellpadding=5 align=center height="80%" width="35%">
<tr><td colspan=2><center><h3>Enter Items</h3></center></td>
</tr>
<tr><td>id</td><td><input type='text' name='name1' placeholder="Unique Item Id"></td>
</tr>
<tr><td>Type</td><td><input type='text' name=name2 placeholder="Item Type"></td>
</tr>
<tr><td>Name</td><td><input type='text' name=name3 placeholder="Name to display"></td>
</tr>
<tr><td>Price</td><td><input type='text' name=name4></td>
</tr>
<tr>
<td>Img_name</td><td><input type='text' name=name5 placeholder="Image name"></td>
</tr>
<tr>
<td>Desc</td><td><input type='text' name=name6 placeholder="Item Descreption"></td>
</tr>
<center>
<tr>
<td colspan=2 align=center>
<input type=submit name='sub1' value=SUBMIT>
</td>
</tr>
</center>
</table>
</form>
</body>
</html>