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

		$fname = $_POST["Fname"];
        $lname = $_POST["Lname"];
		$nati = $_POST["Nationality"];
		$gender = $_POST["gender"];
        $city = $_POST["city"];
        $Country = $_POST["Country"];
        $address = $_POST["address"];
        $postcode = $_POST["postcode"];
        $username = $_POST["username"];
        $password = $_POST["password"];
		$contactNo = $_POST["contactNo"];
		$Email = $_POST["Email"];
		$status = $_POST["status"];


//attempt insert query execution
$sql = "INSERT INTO user(id,First_Name, Last_Name, Nationality, Gender, City, Country, Address, Post_code, Username, Password, Contact_Number, Email, Marital_status) VALUE ('','$fname','$lname','$nati','$gender','$city','$Country','$address','$postcode','$username','$password','$contactNo','$Email','$status')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location:payment.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>