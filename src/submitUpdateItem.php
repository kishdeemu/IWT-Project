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
		$fname = $_POST["First_Name"];
        $lname = $_POST["last_Name"];
		$nati = $_POST["Nationality"];
		$gender = $_POST["gender"];
        $city = $_POST["city"];
        $Country = $_POST["Country"];
        $address = $_POST["address"];
        $postcode = $_POST["postcode"];
        $username = $_POST["username"];
		$contactNo = $_POST["contactNo"];
		$Email = $_POST["Email"];
		$status = $_POST["status"];
		echo $fname;	
		
//attempt insert query execution
$sql = "UPDATE user SET First_Name='$fname',Last_Name='$lname',Nationality='$nati',Gender='$gender',City='$city',Country='$Country',Address='$address',Post_code='$postcode',Contact_Number='$contactNo',Email='$Email',Marital_status='$status' where Username='$username'";
if(mysqli_query($conn,$sql)){
	//echo"<script>alert('record added successfully')"
	header("location:applylogin.php");
	}
else
	{
		echo"<script>alert('ERROR:could not able to execute')</script>";
	}
	//close connection
	mysqli_close($conn)
?>