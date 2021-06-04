<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	//  $first_name = $_POST['first_name'];
	//  $last_name = $_POST['last_name'];
	//  $city_name = $_POST['city_name'];
	//  $email = $_POST['email'];
	//  $sql = "INSERT INTO info (first_name,last_name,city_name,email)
	//  VALUES ('$first_name','$last_name','$city_name','$email')";

	$first_name = $_POST['first_name'];
	 $middle_name = $_POST['middle_name'];
	 $last_name = $_POST['last_name'];
	 $age = $_POST['age'];
	 $address = $_POST['address'];
	 $gender = $_POST['gender'];
	 $sql = "INSERT INTO `employee`(`FirstName`, `MiddleName`, `LastName`, `Age`, `Address`, `Gender`)
	 VALUES ('$first_name', '$middle_name','$last_name','$age','$address','$gender')";
	 if (mysqli_query($conn, $sql)) {
		header("location: retrieve.php");
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>