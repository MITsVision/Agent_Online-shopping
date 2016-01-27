<html>
<head>
<title>Login</title>
<link href="cssl/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>

<?php
if(isset($_POST['txt3']))
{
	$name=$_POST['txt1'];  //we can use htmlentities($_POST['tx1']) to secure page
	$pwd=$_POST['txt2'];
	$link=mysqli_connect("localhost","root","","db1");
	$qry="select email,pass,id from user";
	$result=mysqli_query($link,$qry);
	$count=0;
	while($res=mysqli_fetch_row($result))
	{   
		if(strcmp($name,$res[0])==0 && $pwd==$res[1])
		{
			
		   header("location:http://localhost/AI/Final/Main/home.php?nm=$res[2]");
           $count+=1;
		}
		else
			continue;
	}
	if($count==0)
	{
		echo "<center><font color='#c123a7' size=3>Invalid Email or Password</center>";
	}
}
?>

<div class="login-form">
<h1>Sign In</h1>
<h2><a href="./Signup.php">Create Account</a></h2>
<form action="./login.php" method="POST">
<li>
<input type="text" class="text" value="User Name" name='txt1' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" >
<a href="#" class=" icon user"></a>
</li>
<li>
<input type="password" value="Password" name='txt2' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
<a href="#" class=" icon lock"></a>
</li>
					
<div class ="forgot">
<h3><a href="#">Forgot Password?</a></h3>
 <input type="submit" name='txt3' onclick="myFunction()" value="Sign In" > <a href="#" class=" icon arrow"></a>                                                                                                                                                                                                                                 </h4>
</div>
</form>
</div>
<div>
</div>
</body>
</html>