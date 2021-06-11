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
  <link rel="stylesheet" type="text/css" href="styles/catalogue.css" class="dark_css"/>
  <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="lib/bootstrap/dist/css/open-iconic-bootstrap.min.css" />
  <link rel="stylesheet" href="styles/site.css" class="dark_css"/>
  <link rel="stylesheet" href="styles/efa.css" class="dark_css"/>
  <script src="lib/jquery/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/topnav.css"/>
  <script src="js/catalogue.js"></script>
  <script src="js/dark.js"></script>
</head>

<body>
  <div class="topnav">
    <a href="index.php">Home</a>
    <a class="active" href="catalogue.php">Catalogue</a>
    <a href="contact.php">Contact</a>
    <a href="technical.php">Technical</a>
    <a class="active mode" href="catalogue.php" id="light_mode">Light Mode</a>
    <a href="dark_catalogue.php" id="dark_mode" class="mode">Dark Mode</a>
  </div>
  <?php include 'vpn_warning_light.php';?>

 <div class="mb-2 mt-2">
     <h2 class="title-color mb-3 text-center">ဖက်ဒရယ် တက္ကသိုလ်</h2>
     <h2 class="title-color mb-2 text-center">Virtual Federal University</h2>
 </div>
 <hr />
 <?php include 'cat_table.php';?>

</body>
</html>
