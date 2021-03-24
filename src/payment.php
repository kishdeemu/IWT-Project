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
	<form action="pay.php" method="POST" class="payment">

    <table style="border-color:#1C2833;color:#1C2833" align="center">
	<h3 align="center">Billing Address</h3>
        <tr>
            <td>Full Name: </td>
            <td><input type="text" id="fname" name="fname" placeholder="Full Name" required></td>
        </tr>
        
        <tr>
            <td>E-mail: </td>
            <td cellspacing="0">
                <input name="email" type  = "email" placeholder="visa@eample.com" pattern = "[0-9a-zA-Z%+_-]+@[a-zA-Z]+\.[a-z]{2,3}" id ="mail" class="eml" required><br/>
            </td>
        </tr>
        <tr>
            <td>Address: </td>
            <td><input type="text" id="adr" name="address" placeholder="address" required></td>
        </tr>
		<tr>
            <td>City: </td>
            <td><input type="text" id="city" name="city" placeholder="city" required></td>
        </tr>
		<tr>
            <td>State: </td>
            <td><input type="text" id="state" name="state" placeholder="pp" required></td>
        </tr>
		<tr>
            <td>Zip: </td>
            <td><input type="text" id="zip" name="zip" placeholder="10001" required></td>
        </tr>
        <tr>
        <th colspan="2">Payment</th>
        </tr>
		<tr>
            <td>Accepted Cards</td>
        </tr>
        <tr>
            <td><img src ="images/PaymentMethods.jpg" width ="180px" height ="32px"></td>
        </tr>
            <td>Name on Card: </td>
            <td><input type="text" id="cname" name="card" placeholder="SLEVS" required></td>
        </tr>
        <tr>
            <td>Card Number: </td>
            <td><input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required></td>
        </tr>
       
        <tr>
            <td>Exp Month: </td>
            <td><input type="text" id="expmonth" name="expmonth" placeholder="August" required></td>

        </tr>
        <tr>
            <td>Exp Year: </td>
            <td><input type="text" id="expyear" name="expyear" placeholder="2019" required></td>
        </tr>
        <tr>
            <td>CVV: </td>
            <td><input type="text" id="cvv" name="cvv" placeholder="532" required></td>
        </tr>
        <tr>
            <td colspan="2" align="justify" style="color:#1C2833; font-size: large ">
                <input type = "checkbox" id="check" onchange="document.getElementById('confirm').disabled =!this.checked">I agree to the terms and conditions
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit"  value="CONFIRM" name="submit" id="confirm"class="btn" disabled></td>
        </tr>
		<tr>
			<td colspan="2"><p align="center">Are you a already customer? please check your user profile <a href="Applylogin.php">To User Profile</p>
			</td>
		</tr>
		

    </table>
    </form>
    
	</div>
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
