<?php  include('connect2.php'); ?>
	<?php
		if(isset($_GET['edit'])) {
		$Lab_ID = $_GET['edit'];
		$record = mysqli_query($db, "SELECT * FROM lab_tests WHERE Lab_ID = $Lab_ID");
		
		if (count($record) == 1 ) {
		$n = mysqli_fetch_array($record);
			$n = mysqli_fetch_array($record);
            $Specimen= $n['Specimen'];
            $HBT= $n['HBT'];
            $CBUBFT = $n['CBUBFT'];
            $MLT= $n['MLT'];
			$CLT = $n['CLT'];
			$SLT= $n['SLT'];
}
}
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>hospitalab - index</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><img src="logo1.png" alt="logo"><span class="logo_colour"></span></a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.php">Laboraties</a></li>
          <li><a href="examples.php">Results List</a></li>
          <li><a href="page.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content">
        <div id="button">
        <h2>Welcome to HospitaLab</h2>

        <div id="button">
		<form name = "lab" action = "laboratories.php" method = "POST">
          <h1>Tests:</h1>
          <fieldset>
          <h4>Specimen submitted:</h4>
          <label>
          <input type = "checkbox" name = "Specimen[]" value = "yes">Urine   &nbsp;&nbsp;
          <input type = "checkbox" name = "Specimen[]"  value = "yes">Blood   &nbsp;&nbsp;
          <input type = "checkbox" name = "Specimen[]"  value = "yes">Saliva   &nbsp;&nbsp;
          <input type = "checkbox" name = "Specimen[]"  value = "yes">Sputum   &nbsp;&nbsp;
          <input type = "checkbox" name = "Specimen[]"  value = "yes">Feces   &nbsp;&nbsp;
          <input type = "checkbox" name = "Specimen[]"  value = "yes">Semen  &nbsp;&nbsp;
          </label>
			<h4>Hematological Blood Tests:</h4><br>
          <label>
          <input type = "checkbox" name = "HBT[]" value = "yes">White blood cell count (WBC)<br>
          <input type = "checkbox" name = "HBT[]" value = "yes">Red blood cell count (RBC)<br>
          <input type = "checkbox" name = "HBT[]" value = "yes">Platelet count<br>
          <input type = "checkbox" name = "HBT[]" value = "yes">Hematocrit red blood cell volume (HCT)<br>
          <input type = "checkbox" name = "HBT[]" value = "yes">Hemoglobin concentration (HB)<br>
          <input type = "checkbox" name = "HBT[]" value = "yes">Differential white blood count<br>
          <input type = "checkbox" name = "HBT[]" value = "yes">Red blood cell indices (measurements)<br>
          <input type = "checkbox" name = "HBT[]" value = "yes">Prothrombin time (PT)<br>
          <input type = "checkbox" name = "HBT[]" value = "yes">Partial Thromboplastin Time (PTT)<br>
          <input type = "checkbox" name = "HBT[]" value = "yes"> International Normalized Ratio (INR)<br>
          </label>
           <h4>Chemical Blood, Urine and Body Fluid Tests:</h4>
             <label>
            <input type = "checkbox" name = "CBUBFT[]" value = "yes">Urinalysis<br>
            <input type = "checkbox" name = "CBUBFT[]" value = "yes">Semen Analysis<br>
            <input type = "checkbox" name = "CBUBFT[]" value = "yes">Sweat Chloride<br>
            <input type = "checkbox" name = "CBUBFT[]" value = "yes">Fetal Fibronectin (fFN)<br>
            <input type = "checkbox" name = "CBUBFT[]" value = "yes">Amniotic Fluid Analysis<br>
            <input type = "checkbox" name = "CBUBFT[]" value = "yes"CSF Analysis<br>
            <input type = "checkbox" name = "CBUBFT[]" value = "yes">Synovial Fluid Analysis<br>
            <input type = "checkbox" name = "CBUBFT[]" value = "yes">Pleural Fluid Analysis<br>
            <input type = "checkbox" name = "CBUBFT[]" value = "yes">Pericardial Fluid Analysis<br>
            <input type = "checkbox" name = "CBUBFT[]" value = "yes">Peritoneal Fluid Analysis<br>
            </label>
 
           <h4>Microbiology Laboratory Tests</h4>
           <label>
          <input type = "checkbox" name = "MLT[]"  value = "yes">Antimicrobial Testing<br>
          <input type = "checkbox" name = "MLT[]"  value = "yes">Metalworking Fluids<br>
          <input type = "checkbox" name = "MLT[]"  value = "yes">Legionella Testing<br>
          <input type = "checkbox" name = "MLT[]"  value = "yes">Mycobacteria Testing<br>
          <input type = "checkbox" name = "MLT[]"  value = "yes">Biocide Efficacy Testing<br>
          <input type = "checkbox" name = "MLT[]"  value = "yes">Coliform Testing<br>
          </label>
           <h4>Coagulation Laboratory Tests</h4>
           <label>
           <input type = "checkbox" name = "CLT[]"  value = "yes">Complete blood count (CBC)<br>
           <input type = "checkbox" name = "CLT[]"  value = "yes">actor V assay<br>
           <input type = "checkbox" name = "CLT[]"  value = "yes">Fibrinogen level<br>
           <input type = "checkbox" name = "CLT[]"  value = "yes">Prothrombin time (PT or PT-INR)<br>
           <input type = "checkbox" name = "CLT[]"  value = "yes">Platelet count<br>
           <input type = "checkbox" name = "CLT[]"  value = "yes">Thrombin time<br>
           <input type = "checkbox" name = "CLT[]"  value = "yes">Bleeding time<br>
           </label>
           <h4>Serological Laboratory Tests</h4>
           <label>
            <input type = "checkbox" name = "SLT[]" value = "yes">Agglutination assay 
            <input type = "checkbox" name = "SLT[]"  value = "yes">Precipitation test
            <input type = "checkbox" name = "SLT[]"  value = "yes">Western blot test
            </label>
			<br><br>
	     <label>
		<div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><a href = "index.php" >Cancel</a></button>
        <button name="add">Add</button>
      </div>
          </label>
</div>
</form>
</body>
</html>