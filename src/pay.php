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

		$name = $_POST["fname"];
        $email = $_POST["email"];
		$address = $_POST["address"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];
        $card = $_POST["card"];
        $cardnumber = $_POST["cardnumber"];
        $expmonth = $_POST["expmonth"];
		$expyear = $_POST["expyear"];
		$cvv = $_POST["cvv"];
		
//attempt insert query execution
$sql = "INSERT INTO payment(ID,fullName,email,address,city,state,zip,cardname,cardnumber,expmonth,expyear,cvv) 
		VALUE('','$name','$email','$address','$city','$state','$zip','$card','$cardnumber','$expmonth','$expyear','$cvv')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location:home.html");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>