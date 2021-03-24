<?php
$servername = "localhost";
$database = "iwt";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
session_start();

$user=$_POST['username'];
$_SESSION['LOGIN']=$user;
echo $user;
?>
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
    <table border="1" style="border-color:#black;color:#black" align="center">
	<h1 align="center">user profile</h1>
		<tr align = "center">
	        <tr>
			<th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Nationality</th>
			<th>Gender</th>
            <th>city</th>
            <th>Country</th>
            <th>Address</th>
            <th>post code</th>
            <th>Username</th>
            <th>Contact Number</th>
            <th>E-mail</th>
            <th>Marital status</th>
			<th>edit</th>
        </tr>
		<?php

$sql = "SELECT * FROM user where Username='$user'";
$result = $conn->query($sql);
if($result->num_rows > 0){

	//output data of each row
	while($row = $result->fetch_assoc()){
		$id = $row["id"];
		echo "<tr><td>".$row["id"]."</td>";
		echo "<td>".$row["First_Name"]."</td>";
		echo "<td>".$row["Last_Name"]."</td>";
		echo "<td>".$row["Nationality"]."</td>";
		echo "<td>".$row["Gender"]."</td>";
		echo "<td>".$row["City"]."</td>";
		echo "<td>".$row["Country"]."</td>";
		echo "<td>".$row["Address"]."</td>";
		echo "<td>".$row["Post_code"]."</td>";
		echo "<td>".$row["Username"]."</td>";
		echo "<td>".$row["Contact_Number"]."</td>";
		echo "<td>".$row["Email"]."</td>";
		echo "<td>".$row["Marital_status"]."</td>";
		echo "<td><button type='submit'><a href ='editRecord.php?id=$id'>Edit</a></button></td></tr>";
	}
}
else{
	echo "0 result";
	}
	echo "</table>";
		$conn->close();

?>
    </table>
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
