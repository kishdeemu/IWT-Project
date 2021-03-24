<!DOCTYPE html> 
<?php
	session_start();
	$usernmae=$_POST['username'];
	$_SESSION['LOGIN']=$usernmae;
	
?>

<html>
	<head>
		
		<title>Online Visa Processing System</title>
		<link rel ="stylesheet" type = "text/css" href="style.css">

	</head>
	<body bgcolor="white">
	<div class="welcome-text">
	<h1>SLEVS</h1>
	<h4 style="color:white;">Sri Lanka Electronic Visa System</h4>
	</div>
	<div class="slideshow" style="max-width: 100%; max-height: 500px;">
    <img class="Slides" src="images/b1.jpg">
    <img class="Slides" src="images/b2.jpg">
    <img class="Slides" src="images/b3.jpg">
    <img class="Slides" src="images/b4.jpg">
    <img class="Slides" src="images/b5.jpg">
	</div>
		

		<div class ="menu">
		<nav>
		<img src ="images/111.png" width ="120" height = "120" class ="logo">
			<a href = "Contact Us.html" class = "right">Contact Us</a>
			<a href = "About Us.html" class = "right">About Us</a>
			<a href = "Terms & conditions.html" class = "right">Terms & conditions</a>
			<a href = "Privacy Policy.html" class = "right">Privacy Policy</a>
			<a href = "Applylogin.php" class = "right">Apply Now</a>
			<a href = "home.html" class = "right">Home</a>
			
			<div class="welcome-text">
				<h1>SLEVS</h1>
				<h4 style="color:white;">Sri Lanka Electronic Visa System</h4>
			</div>
			
		</nav>
		</div><br><br>
			<center>
		<h1><p>SLEVS</p></h1>
		</center><br>
		<div class="welcome-text">
	    <h1>Apply Now</h1>
	</div>
	</div>
	</header>
	<div>
<form align="center" class="login" method="POST" action="user.php">
	<table align="center">
	<h1 align="center">Login Form</h1>
        <tr>
            <td>Username: </td>
            <td><input type="text" name="username" placeholder="user name" required></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="password" placeholder="password" required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" class="loginbutton" value="LOGIN" name="btnInsert"></td>
        </tr>
		<tr>
			<td colspan="2"><p align="center">Not Registered? <a href="register.php">Register</p>
			</td>
		</tr>
		
		<tr>
			<td colspan="2"><p align="center">Are You An Admin <a href="adminlogin.html">Admin login</p>
			</td>
		</tr>
    </table>
	</form>
	<br><br>
	<br><br>
	</div>
		<p></P>
	<div>
		<footer align = "center" id ="footer">
		<div class ="footer-top" style="width: 100%" >
        <div class ="container">
		<div class ="row">
		<div class ="footer-info">
		</div>
		<table border = 0 width = 100% align = "center">
		<th>
		<div class ="footer-links" align = "left">
		<h4>useful links</h4>
		<ul>
		<li>Travel Guide:
		<a style=text-decoration:none; href ="#">www.srilanka.travel</a></li>
		<li>Accomadations:
		<a style=text-decoration:none; href ="#">www.agoda.com</a></li>
		</ul>
		</div></th>
		<th>
		<div class ="footer-contact" align="center">
		<h2>contact us</h2>
		<p>
		<strong>phone: </strong>+94 713622528<br>
		<strong>Email: </strong>slevisa@gmail.com<br>
		No 04,<br>		
		Kandy Road,<br>
		Malabe<br>
		</p>
		</div></th>
		<th>
		</div class ="footer-newsletter">
		<P style= "color:black;">00000000000000000000000000000000</p>
		
		</div>
		</div></th></table>
		<table border = 0>
		<tr><td><img class = "footerlogo1" src ="images/Facebook.png" width ="36px" height = "36px"></td>
			<td><img class = "footerlogo1" src ="images/Instagram.png" width ="35px" height = "35px"></td>
			<td><img class = "footerlogo1" src ="images/Twitter.png" width ="32px" height = "32px"></td>
		</table>
		<img class ="footerlogo2" src ="images/PaymentMethods.jpg" width = "180px" height = "30px" align = "right"><br>
		<hr border = "2">
		<div class ="container">
		<div class ="copyright" align ="center">
		&copy;Copyright<strong> SLEVS</strong>.All Rights reserved
		</div>
		<div class ="credits">
		Designed by<a href ="#">SLEVS</a>
		</div>
		</div>
		</div>
		</footer>
		</div>
						<script type="text/javascript">
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("Slides");
        for (i = 0; i < x.length; i++){
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length){myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel,5000);
    }
	</script>
	</body>
	</html>
