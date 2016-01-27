<html>
<head>
<title>Sign-Up</title>
<link href="cssl/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
if(isset($_POST['txt6']))
{
$first_name=$_POST['txt1'];
$last_name=$_POST['txt2'];
$email=$_POST['txt31'];
$dob=$_POST['txt4'];
$pass=$_POST['txt5'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"db1");
$id="$first_name"."."."$last_name";
$qury="insert into user values('$id','$first_name','$last_name','$email','$dob','$pass')";
$sub=mysqli_query($link,$qury);
if($sub)
	echo "<center><font color='#c123a7' size=5>successful<br>Login Now</center>";
}
?>	



<div class="login-form">
<h1>Sign Up</h1>
<h2><a href="./Login.php">Login</a></h2>
<form action="./signup.php" method=POST >
<li>
<input type="text" class="text" name='txt1' value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'FIRST Name';}" >
<a href="#" class="icon user"></a>
</li>
<li>
<input type="text" class="text" name='txt2' value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'LAST Name';}" >
<a href="#" class=" icon user"></a>
</li>
<li>
<input type="text" class="text" name='txt31' value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User EMAIL';}" >
<a href="#" class=" icon user"></a>
</li>
<li>
<input type="date" class="text" name='txt4' value="Bday" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User BDAY';}" >
<a href="#" class=" icon user"></a>
</li>
<li>
<input type="password" name='txt5' value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
<a href="#" class=" icon lock"></a>
</li>
<input type="submit" name='txt6' onclick="myFunction()" value="Sign Up" >                                                                                                                                                                                                                                </h4>

</form>
</div>
</body>
</html>