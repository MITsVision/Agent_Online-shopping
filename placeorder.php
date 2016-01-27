<html>
<head>
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/head.css">
<link rel="stylesheet" href="css/savan.css">
<style>
input.one{
width:75%;
height:30px;
background-color:;
font-size:21px;
border:2px solid grey;
}
textarea.onu{
width:75%;
background-color:;
font-size:21px;
border:2px solid grey;
}
input.two{
width:45%;
font-size:21px;
height:45px;
background-color:yellow;
border:2px solid blue;
}
</style>
<title>Delivery</title>
</head>
<link rel="shortcut icon" href="./Logo.jpg">
<body bgcolor="#220711">
<div class="ont">
<img src="./mine.jpg" height="99px" width="35%" />
</div>

<center>
<div class="two">
<div class="three">
<hr color="red" />
<font color="#22f099" size="6">
Address Details
</font>
<hr color="red" />
</div>


<form action="./placefinal.php" method="POST">
<table height='140px' width='60%'align='center'cellspacing='10px'>
<tr>
     <td>
	 <font color="#228099" size="5">
  Name:</td><td class=to>
     <input name="name1" type="search" placeholder="Enter Your valid Name" class=one>
	  </td>
</font>
</tr>
<tr>
     <td>
	 <font color="#228099" size="5">
 PinCode:</td><td class=to>
     <input name="name2" type="search" placeholder="Enter Your valid PinCode" class=one>
	  </td>
</font>
</tr>
<tr>
     <td>
	 <font color="#228099" size="5">
 Address:</td><td class=to>
     <textarea rows=5 name="name3"placeholder="Enter Your valid address.." width='75%' class='onu'></textarea>
	  </td>
</font>
</tr>
<tr>
     <td>
	 <font color="#228099" size="5">
 Landmark:</td><td class=to>
     <input name="name2" type="search" placeholder="(Optional)" class=one>
	  </td>
</font>
</tr>
<tr>
     <td>
	 <font color="#228099" size="5">
 Country:</font></td><td class=to>
     <font color="#222299" size="5">India (Service available only in India)
	  </td>
</font>
</tr>
<tr>
     <td>
	 <font color="#228099" size="5">
 City:</td><td class=to>
     <input name="name2" type="search" placeholder="City Of India" class=one>
	  </td>
</font>
</tr>
<tr>
     <td>
	 <font color="#228099" size="5">
 Mobile:</td><td class=to>
     <input name="name2" type="search" placeholder="+91...." class=one>
	  </td>
</font>
</tr>

<center>
<tr><td colspan=2 align=center>
<input type='submit' name='sub1' value='SAVE &amp SUBMIT' class='two'>
</td></tr>
</center>
</table>
</form>
<?php
 
echo"<br><br><br><p></div>";
include("footer.php");
?>

</body>
</html>