<html>
<head>
<title>Final</title>

<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/head.css">
<link rel="stylesheet" href="css/savan.css">

<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/camera.js"></script>
<script src="js/owl.carousel.js"></script> 
<script src="js/jquery.mobile.customized.min.js"></script>

<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
  $('#camera_wrap').camera({
    loader: false,
    pagination: false ,
    //minHeight: '400',
    thumbnails: false,
    height: '28%',
    caption: false,
    navigation: true,
    fx: 'mosaic'
  });
  $("#owl").owlCarousel({
    items : 3, //10 items above 1000px browser width
    itemsDesktop : [995,1], //5 items between 1000px and 901px
    itemsDesktopSmall : [767, 1], // betweem 900px and 601px
    itemsTablet: [700, 1], //2 items between 600 and 0
    itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
    navigation : true,
    pagination :  false
  }); 
 }); 
</script>
</head>

<body bgcolor="#220711">

<div class="ont">
<img src="./mine.jpg" height="99px" width="35%" />
</div>

<section id="stuck_container">
    <div class="container_12">
        <div class="grid_12">          
          <div class="navigation">
             <center>
			 
<ul>
<li><a href="" class="five">Home</a></li>
  <li><a href="./new.php" class="five">New</a></li>
  <li><a href="./collection.php" class="five">Collection</a></li>
  <li>
    <font color="#55aa77">Member</font>
    <ul>
      <li> <a href="./Logins/Login.php" class="five">Login</a></li>
      <li><a href="./Logins/Signup.php" class="five">Signup</a></li>
    </ul>
  </li>
  <li><a href="https://www.facebook.com/savan.morya" class="five">Contacts</a></li>
</ul>

</center>
            <div class="clear"></div>
          </div>       
         <div class="clear"></div>  
     </div> 
     <div class="clear"></div>
    </div> 
  </section>


<section id="stuck_container">
<section class="slider_wrapper">
  <div id="camera_wrap">
    <div data-src="images/slide.jpg"></div>
    <div data-src="images/slide1.jpg"></div>
    <div data-src="images/slide2.jpg"></div>  
  </div>  
 </section> 
 </section>
 
 <center>
 <div>
 </div>
 </center>

 
<center>
<div class="two">
<div class="three">
<hr color="red" />
<font color="#22f099" size="6">
New Cell
</font>
<hr color="red" />
</div>

<?php
    $link=mysqli_connect("localhost","root","","db1");
	$qry="select * from collect where id like'%2'";
	$result=mysqli_query($link,$qry);
	$b=".jpg";
 while($res=mysqli_fetch_row($result))
{
	$c="$res[4]"."$b";
echo "<table class=\"one\" cellspacing=\"1px\">
<tr>
<td align=\"center\">
<img class=\"one\" src='./product/electronics/$c' />
</td>
</tr>
<tr>
<p>
<td align=\"center\">
<br>";
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