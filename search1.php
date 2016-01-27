<?php

$id=$_GET['nm'];

function search_results1($name1)
{
	$link = mysqli_connect("localhost","root","","db1");
	$returned_result = array();
	$where="";
	
	$name1=preg_split('/[\s]/',$name1);
	$total=count($name1);
	foreach($name1 as $key =>$keywords)
	{
	 $where .="`desc` LIKE '%$keywords%'";
		if($key !=($total-1))
		{
			$where .=" AND ";
		}
		
	}
	$result = "select * from `collect` where $where";
	$res1=mysqli_query($link,$result);
	$b=".jpg";
	if(mysqli_num_rows($res1)===0)
	{
	echo "<h3   color='#1cff33'>Nothing Found!!!</h3><br><br><br><br><br><br><br><br><br><br><br>";
	}
	else
	while($res=mysqli_fetch_row($res1))
	{
	$d= "$res[4]"."$b";
   echo "<table class=\"one\" cellspacing=\"1px\">
  <tr>
  <td align=\"center\">
   <img class=\"one\" src='./product/electronics/$d' />
  </td>
  </tr>
  <tr>
  <p>
  <td align=\"center\">
  ";
echo "<p><a href=\"#\" class=\"five\">
<font color=\"#a20099\" size=\"6\"><br>$res[2]
<br>
</a>
</font>
<br />
<font color=\"cc1100\" size=\"6\">
<b>Rs.$res[3]</b>
<hr />
</font>
</td>
</tr>
</table>";
}

echo "</div>";
			
	}


?>