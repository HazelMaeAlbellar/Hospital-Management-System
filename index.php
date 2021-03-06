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
        <h2>Welcome to HospitaLine Laboratory</h2>

        <h1>Take a Laboratory Test</h1>
        <button><a href="patient_form.php">TAKE TEST</a></button>

        <h1>See Laboratory Results</h1>
        <button><a href="examples.php">SEE RESULTS</a></button>

      </div>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
    </div>
  </div>
</body>
</html>