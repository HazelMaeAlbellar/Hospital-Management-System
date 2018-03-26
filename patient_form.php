<?php  include('connect.php'); ?>
	<?php
		if(isset($_GET['edit'])) {
		$patient_id = $_GET['edit'];
		$record = mysqli_query($db, "SELECT * FROM patient_form WHERE Patient_ID = $Patient_ID");
		
		if (count($record) == 1 ) {
		$n = mysqli_fetch_array($record);
			$n = mysqli_fetch_array($record);
            $Name= $n['Name'];
            $Address= $n['Add'];
            $Phone_Number = $n['Phone_Number'];
            $Contact_Person= $n['Contact_Person'];
			$Birthday = $n['Birthday'];
			$Date= $n['Date'];
			$Physician= $n['Physician'];
			$Gender= $n['Gender'];
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
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Take Test</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form name="myForm" action="connect.php" method = "POST">
    <div class="container" id="profile">
      <h1>Laboratory form</h1>
      <fieldset>
      <p>Please fill in this form:</p>
      <hr>
      <label for="Name"><b>Name</b></label>
      <input type="text" placeholder="Name" name="Name" required>
        <br><br>
      <label for="Address"><b>Address: </b></label>
      <input type="text" placeholder="Address" name="Address" required>
        <br><br>
      <label for="phone"><b>Phone Number: </b></label>
      <input type="text" placeholder="Phone Number" name="Phone_Number" required>
       <br><br>
      <label for="contact"><b>Contact Person: </b></label>
      <input type="text" placeholder="Person to be contact" name="Contact_Person" required>
       <br><br>
      <label for="birth"><b>Birthday: </b></label>
      <input type="date" placeholder="Birthday" name="Birthday" required>
       <br><br>
      <label for="date"><b>Date: </b></label>
      <input type="date" placeholder="Date of lab test" name="Date" required>  
      <br><br>
      <label for="phys"><b>Physician: </b></label>
      <input type="text" placeholder="ex. Mr..." name="Physician" required>
        <br><br>
      <label name = "Gender" required>Gender:</label>
	  <select>
		<option>Male</option>
		<option>Female</option>
	  </select>
      <br><br>
	            <label>
		<div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><a href = "index.php" >Cancel</a></button>
        <button name="add">Add</button>
      </div>
          </label>
</fieldset>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function validateForm() {
    var x = document.forms["myForm"]["Name" && "Date" && "Physician"].value;
    if (x == "") {
        alert("Name, Date and Physician must be filled out");
        return false;
    }
}
</script>

        <h1>See Laboratory Results</h1>
        <button><a href="examples.php">SEE RESULTS</button>

      </div>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      
    </div>
  </div>
</body>
</html>