<html>
<head>
<style>
body {background-color:}
tr{ width:50%;height:40px;border:1px;color:green;}
input.one{
width:100%;
height:45px;
background-color:;
font-size:21px;
border:2px solid grey;
}
input.two{
width:100%;
font-size:21px;
height:45px;
background-color:yellow;
border:2px solid blue;
}
td.to{ width:80%;height:40px;border:1px;color:green;}
</style>
</head>
<body>
<?php

echo"
<form action=\"./search_result.php?nm=$id\" method=\"POST\">";
?>
<table height='40px' width='60%'align='center'>
<tr>
     <td class=to>
     <input name="name1" type="search" placeholder="So, what are you wishing for today?" class=one>
	  </td>
	  <td>
      <input name="name2" type="submit" value="Search" class=two>
     </td>
</tr>
</table>
</form>
<?php
if(isset($_POST['name1']))
{	
echo "<center>
<div class=\"two\">
<div class=\"three\">
<hr color=\"red\" />
<font color=\"#22f099\" size=\"6\">
Search Result
</font>
<hr color=\"red\" />
</div>";

include('search1.php') ;
$name1=htmlentities(trim($_POST['name1']));
$errors=array();
if(empty($name1)){
	$errors[]='please enter something!!';
}
else if(strlen($name1)<3)
{
	$errors[]='Must be of 3 character!!!';
}
else if(1==2)
{
	$errors[]='Nothing found';
}

if(empty($errors))
{
	search_results1($name1);
}
else
{
	foreach($errors as $error){
		echo "<h3> $error </h3><br><br><br><br><br><br><br><br><br><br><br>";
	}
}

}
?>

</body>
</html>