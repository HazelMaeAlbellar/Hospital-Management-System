<?php

	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'patient');
	
	$name = "";
	$Address = "";
	$Phone_Number = "";
	$Contact_Person = "";
	$Birthday = "";
	$Date = "";
	$Physician = "";
	$Gender = "";
	$Patient_ID = 0;
	$update = false;
	
	if (isset($_POST['add'])) {
		$Patient_ID = $_POST['Patient_ID'];
		$Name = $_POST['Name'];
		$Address = $_POST['Address'];
		$Phone_Number = $_POST['Phone_Number'];
		$Contact_Person = $_POST['Contact_Person'];
		$Birthday = $_POST['Birthday'];
		$Date = $_POST['Physician'];
		$Gender = $_POST['Gender'];
		
		$query = "INSERT INTO patient_form (Name, Address, Phone_Number, Contact_Person, Birthday, Date, Gender) VALUES ('$Name', '$Address', '$Phone_Number', '$Contact_Person', '$Birthday', '$Date', '$Gender')";
		mysqli_query($db, $query);
		$_SESSION['message'] = "Patient Info added!";
		header('location: laboratories.php');
		
	
	}
	
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM info WHERE Patient_ID=$Patient_ID");
		$_SESSION['message'] = "Patient Info deleted!"; 
		header('location: laboratories.php');
	}
?>

<?php $results = mysqli_query($db, "SELECT * FROM patient_form"); ?>
		