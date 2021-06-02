<!DOCTYPE html>
<html lang="my">

<head>
  <title>ဖက်ဒရယ် တက္ကသိုလ်</title>
  <link rel="icon" sizes="16x16 32x32 64x64" href="vfulogoonly.ico"/>
  <meta name="Wesley Ho" content="VFU" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- <link rel="stylesheet" type="text/css" href="styles/v1.css"/> -->
  <link rel="stylesheet" type="text/css" href="styles/v2.css"/>
  <link rel="stylesheet" type="text/css" href="styles/dark-mode/catalogue.css" class="dark_css"/>
  <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="lib/bootstrap/dist/css/open-iconic-bootstrap.min.css" />
  <link rel="stylesheet" href="styles/dark-mode/site.css" class="dark_css"/>
  <link rel="stylesheet" href="styles/dark-mode/efa.css" class="dark_css"/>


  <script src="lib/jquery/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/topnav.css"/>
  <script src="js/catalogue.js"></script>
  <script src="js/dark.js"></script>
</head>

<body>
  <div class="topnav">
    <a href="dark_index.php">Home</a>
    <a class="active" href="dark_catalogue.php">Catalogue</a>
    <a href="dark_contact.php">Contact</a>
    <a href="dark_technical.php">Technical</a>
    <a href="catalogue.php" id="light_mode" class="mode">Light Mode</a>
    <a class="active mode" href="dark_catalogue.php" id="dark_mode">Dark Mode</a>
  </div>
  <div class="alert alert-warning mb-3">
	<span class="oi oi-warning"></span>
	We highly recommend that you use a VPN when accessing this website or downloading any of our materials for your own privacy and safety.
	Please see the <a href="technical.php">technical page</a> for a list of VPN suggestions. The VFU will never ask for your private information or for fees or donations from studets. If you receive requests like this please let us know.
 </div>

 <div class="mb-2 mt-2">
     <h2 class="title-color mb-3 text-center">ဖက်ဒရယ် တက္ကသိုလ်</h2>
     <h2 class="title-color mb-2 text-center">Virtual Federal University</h2>
 </div>
 <hr />
 <?php include 'cat_table.php';?>

</body>
</html>
