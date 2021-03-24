<!DOCTYPE html> 
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
		
	<body style="background-color:#EBEEEE;">
	<div>
	<form action="reg.php" method="POST" class="register" onclick="enableButton()" >
    <table style="border-color:#1C2833;color:#1C2833" align="center">
	<h1 align="center">REGISTER FORM</h1>
        <tr>
            <td>First name: </td>
            <td><input placeholder="First Name" type="text" name="Fname" required></td>
        </tr>
        <tr>
            <td>Last name: </td>
            <td><input placeholder="Last Name" type="text" name="Lname" required></td>
        </tr>
		<tr>
            <td>Nationality: </td>
            <td><input type="text" name="Nationality" required></td>
        </tr>
		<tr>
			<td>Gender :</td>
			<td><input type ="radio" name ="gender" value="M" required>Male
			<input type = "radio" name = "gender" value="F" required>Female</td>
		</tr>
		<tr>
            <td>City: </td>
            <td><input type="text" name="city" required></td>
        </tr>
		<tr>
            <td>Country: </td>
            <td><input type="text" name="Country" required></td>
        </tr>
		<tr>
            <td>Address: </td>
            <td><textarea name="address" cols="50" rows="5" required></textarea></td>
        </tr>
		<tr>
		<tr>
            <td>post code: </td>
            <td><input type="text" name="postcode" required></td>
        </tr>
            <td>Username: </td>
            <td><input placeholder="abcd" type="text" name="username" required></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="password" required></td>
        </tr>
        <tr>
            <td>Contact Number: </td>
            <td><input placeholder="0123456789" type="text" name="contactNo" required></td>
        </tr>
        <tr>
            <td>E-mail: </td>
            <td cellspacing="0">
			<input type="email" placeholder="abc@123.com" name="Email" pattern = "[0-9a-zA-Z%+_-]+@[a-zA-Z]+\.[a-z]{2,3}" id ="mail" required><br/>
			</td>
		</tr>	
		<tr>
            <td>Marital status:
			<td>
			<select name="status" required>
				<option value ="Please Select">Pleaase select </option>
				<option value ="SINGLE">SINGLE</option>
				<option value ="MARRIED">MARRIED</option>
				<option value ="COMMON LAW MARRIAGE">COMMON LAW MARRIAGE</option>
				<option value ="CIVIL UNION/DOMESTIC PARTNESHIP">CIVIL UNION/DOMESTIC PARTNESHIP</option>
				<option value ="WIDOWED">WIDOWED </option>
				<option value ="DIVORCED">DIVORCED </option>
				<option value ="SEPARATED">SEPARATED </option>
				<option value ="OTHER">OTHER </option>
			</select>
			</td>
        </tr>
        <tr>
            <td colspan="2" align="justify" style="color:#1C2833; font-size: large ">
                <input type="checkbox" id="check" onchange="document.getElementById('REGISTER').disabled =!this.checked">
                By declare that the information I have given in this application is truthful, complete and correct.
				I have read and accept the terms and conditions and privacy policy.<br>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
			<button  action="Applytrip.html" id="REGISTER" type="submit" class="loginbutton" disabled>NEXT STEP</button></td>
        </tr>
    </table>
	</form>
	</div>
	<p align="center" style="color:white;">Already registered as a Customer?
	<a href = "Apply login.html">LOGIN</a></p>
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