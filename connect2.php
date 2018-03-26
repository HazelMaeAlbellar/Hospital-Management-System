<?php

	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'patient');
	
	$Lab_ID = 0;
	$Specimen = "";
	$HBT = "";
	$CBUBFT = "";
	$MLT = "";
	$CLT = "";
	$SLT = "";
	$update = false;
	
	if (isset($_POST['add'])) {
		$Specimen = $_POST['Specimen'];
		$HBT = $_POST['HBT'];
		$CBUBFTT = $_POST['CBUBFT'];
		$MLT = $_POST['MLT'];
		$CLT = $_POST['CLT'];
		$SLT = $_POST['SLT'];
		
		$query = "INSERT INTO lab_tests(Specimen, HBT, CBUBFT, MLT, CLT, SLT) VALUES ('$Specimen', '$HBT', '$CBUBFT', '$MLT', '$CLT', '$SLT')";
		mysqli_query($db, $query);
		$_SESSION['message'] = "Patient lab tests request added.";
		header('location: laboratories.php');
}
?>

<?php $results = mysqli_query($db, "SELECT * FROM lab_tests"); ?>
			
	