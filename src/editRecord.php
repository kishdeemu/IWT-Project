<!DOCTYPE html> 
<html>
	<head>

		<title>Online Visa Processing System</title>
		<link rel ="stylesheet" type = "text/css" href="styleuser.css">
		<meta charset="utf-8">
		<link rel="stylesheet" href="searcbar.css">
	<style>
	header{
	background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("images/apply now.jpg");
	height: 35vh;
	background-size:cover;
	background-position: center center;
	position: relative;
	}
	<script src ="js/styleapply.js">
	</script>
	</style>
	</head>
	<body background="images/b1.jpg">
		<header>
<div class="logo">		
		<img src ="images/111.png" width ="150" height = "120" class ="logo">
</div>
		<h3>
		<ul class ="menu">
			<li><a href = "home.html">Home</a></li>
			<li><a href = "Apply login.html">Apply Now</a></li>
			<li><a href = "Privacy Policy.html">Privacy Policy</a></li>
			<li><a href = "Terms & conditions.html">Terms & conditions</a></li>	
			<li><a href = "About Us.html">About Us</a></li>
			<li><a href = "Contact Us.html">Contact Us</a></li>
			<li><div class="search-box-wrapper">
			<input type=text" align ="left" name ="" placeholder="search.." class="search-box-input">
			<button c class="search-box-button">&#128269;</button>
			</div></li>
		</ul>
		</h3>
		<div class="welcome-text">
	    <h1>User edit</h1>
	</div>
	</div>
	</header>
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
$recordid = $_GET['id'];

$sql = "SELECT * FROM user where id = $recordid";
$result = $conn->query($sql);
if($result->num_rows > 0){
	//output data of each row
	while($row = $result->fetch_assoc()){
	$fname =$row["First_Name"];
	$lname	=$row["Last_Name"];
	$nati	=$row["Nationality"];
	$gender	=$row["Gender"];
	$city	=$row["City"];
	$Country =$row["Country"];
	$address =$row["Address"];
	$postcode =$row["Post_code"];
	$username =$row["Username"];
	$contactNo	=$row["Contact_Number"];
	$Email =$row["Email"];
	$status	=$row["Marital_status"];
	$id = $row["id"];
	}
}
?>
<!--<center>-->
	<form method="POST"  align="center" action="submitUpdateItem.php">
	<br>first_Name<br><input type="text" value = <?php echo $fname ?> name="First_Name"><br>
	Last_Name<br><input type="text" value = <?php echo $lname ?> name="last_Name"><br>
	Nationality<br><input type="text" value = <?php echo $nati ?> name="Nationality"><br>
	gender<br><input type="text" value = <?php echo $gender ?> name="gender"><br>
	city<br><input type="text" value = <?php echo $city ?> name="city"><br>
	Country<br><input type="text" value = <?php echo $Country ?> name="Country"><br>
	address<br><input type="text" value = <?php echo $address ?> name="address"><br>
	postcode<br><input type="text" value = <?php echo $postcode ?> name="postcode"><br>
	username<br><input type="text" value = <?php echo $username ?> name="username"><br>
	contactNo<br><input type="text" value = <?php echo $contactNo ?> name="contactNo"><br>
	Email<br><input type="text" value = <?php echo $Email ?> name="Email"><br>
	status<br><input type="text" value = <?php echo $status ?> name="status"><br>
	<input type="hidden" value = <?php echo $id ?> name="Id"><br>
	
	<input type="submit" value = "submit">

	</form>
	
</html>