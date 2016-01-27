<html>
<head>
<title>Cart</title>
<link rel='stylesheet' href='css/menu.css'>
<link rel='stylesheet' href='css/head.css'>
<link rel='stylesheet' href='css/savan.css'>
<link rel='stylesheet' href='css/style.css'>
</head>

<link rel='shortcut icon' href='./Logo.jpg'>

<body bgcolor='#220711'>

<div class='ont'>
<img src='./mine.jpg' height='99px' width='35%' />
</div>

<div class=morq>
<marquee scrollamount='10' behavior='alternate' direction='right'>
Your Cart</marquee>
</div>
<?php

$idnum=$_GET['ids'];

    $link=mysqli_connect("localhost","root","","db1");
	$qry="select * from collect where id='$idnum' ";
	$result=mysqli_query($link,$qry);
	$b=".jpg";
	while($res=mysqli_fetch_row($result))
	{
    $c="$res[4]"."$b";
    echo" <div class=cartl>
    <img class=one src='./product/electronics/$c' />
    </div>
    <div class=cartr>
    <h3>$res[2]</h3>
    <h2>Rs. $res[3]</h2>
   <form name='f1' action='home.php' method='POST'>
   <input class=carto type=submit name='cart' value='ADD TO CART'>
   </form>
   <p />
   <form name='f1' action='placeorder.php' method='POST'>
  <input class=carto1 type=submit value='BUY NOW'></a>
  </div></form>";

}

include('footer.php');
?>

 </body>
 </html>