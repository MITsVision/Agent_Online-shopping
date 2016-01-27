<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="css/savan.css">
<style>

#nav1 {
    line-height:20px;
    background-color:#eeeeee;
    height:300px;
    width:200px;
    float:right;
    padding:20px;	    	
}

</style>
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

<link rel="shortcut icon" href="./Logo.jpg">

<body bgcolor="#220711">


<div class="ont">
<img src="./mine.jpg" height="99px" width="35%" />
</div>

<section id="stuck_container">
    <div class="container_12">
        <div class="grid_12">          
          <div class="navigation">
             
			 
	<center>
<div>
<font size="4">
<?php
if(isset($_GET['nm']))
 {
	
$id=$_GET['nm'];

echo"
<ul>
<li>Electronics
   <ul><li><a class=\"five\" href=\"http://localhost/AI/Final/Main/mobile.php?nm=$id\">Mobile</a></li>
       <li><a class=\"five\" href=\"http://localhost/AI/Final/Main/laptop.php?nm=$id\">Laptop</a></li>
	   <li><a class=\"five\" href=\"http://localhost/AI/Final/Main/accessories.php?nm=$id\">Accessories</a></li>

	</ul></li>
<li>Clothing
   <ul><li><a href=\"http://localhost/AI/Final/Main/mencloth.php?nm=$id\" class=\"five\">Men</a></li>
       <li><a href=\"http://localhost/AI/Final/Main/womencloth.php?nm=$id\" class=\"five\">Women</a></li>
	</ul></li>
	<li>HOME & FURNITURE
   <ul><li><a href=\"http://localhost/AI/Final/Main/homeapp.php?nm=$id\" class=\"five\">All Home </a></li>
	</ul></li>
	<li>BOOKS & MEDIA
   <ul><li><a href=\"http://localhost/AI/Final/Main/book.php?nm=$id\" class=\"five\">Books</a></li>
       <li><a href=\"http://localhost/AI/Final/Main/media.php?nm=$id\" class=\"five\">Media</a></li>
	</ul></li>
	<li>AUTO & SPORTS 
   <ul><li><a href=\"http://localhost/AI/Final/Main/auto.php?nm=$id\" class=\"five\">Auto</a></li>
       <li><a href=\"http://localhost/AI/Final/Main/sports.php?nm=$id\" class=\"five\">Sports</a></li>
	</ul></li>
	<li>Offers 
   <ul><li><a href='' class=\"five\">Todays</a></li>
       <li><a href='' class=\"five\">all Time</a></li>
	</ul></li>";
}
else
{
echo"
<ul><li>Electronics
   <ul><li><a class=\"five\" href=\"http://localhost/AI/Final/Main/mobile.php\">Mobile</a></li>
       <li><a class=\"five\" href=\"http://localhost/AI/Final/Main/laptop.php\">Laptop</a></li>
	   <li><a class=\"five\" href=\"http://localhost/AI/Final/Main/accessories.php\">Accessories</a></li>

	</ul></li>
<li>Clothing
   <ul><li><a href=\"http://localhost/AI/Final/Main/mencloth.php\" class=\"five\">Men</a></li>
       <li><a href=\"http://localhost/AI/Final/Main/womencloth.php\" class=\"five\">Women</a></li>
	</ul></li>
	<li>HOME & FURNITURE
   <ul><li><a href=\"http://localhost/AI/Final/Main/homeapp.php\" class=\"five\">All Home </a></li>
	</ul></li>
	<li>BOOKS & MEDIA
   <ul><li><a href=\"http://localhost/AI/Final/Main/book.php\" class=\"five\">Books</a></li>
       <li><a href=\"http://localhost/AI/Final/Main/media.php\" class=\"five\">Media</a></li>
	</ul></li>
	<li>AUTO & SPORTS 
   <ul><li><a href=\"http://localhost/AI/Final/Main/auto.php\" class=\"five\">Auto</a></li>
       <li><a href=\"http://localhost/AI/Final/Main/sports.php\" class=\"five\">Sports</a></li>
	</ul></li>
	<li>Offers 
   <ul><li><a href='' class=\"five\">Todays</a></li>
       <li><a href='' class=\"five\">all Time</a></li>

	</ul></li>
";
}

?>

	<?php
	$count=0;
	$cnt=0;
	if(isset($_POST['cart']))
	{ 
       $cnt+=1;
		echo"<font color='grey' size='5'>Cart:$cnt";
	}
	else
	echo"<font color='grey' size='5'>Cart:$count";
	?>
</ul>
</div>
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
	<div data-src="images/iphone.jpg"></div> 
    <div data-src="images/musicbook.jpg"></div> 
    <div data-src="images/offeriphone.jpg"></div> 
    <div data-src="images/offerwatch.jpg"></div>  
    <div data-src="images/homekichen.jpg"></div>    	
  </div>  
 </section> 
 </section>
 
 <center>
 <div>
 <?php
 if(isset($_GET['nm']))
 {
 $id=$_GET['nm'];
 include("search.php");
 }
 ?>
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