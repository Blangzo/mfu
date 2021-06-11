<!DOCTYPE html>
<html lang="my">

<head>
  <title>ဖက်ဒရယ် တက္ကသိုလ်</title>
  <link rel="icon" sizes="16x16 32x32 64x64" href="vfulogoonly.ico"/>
  <meta name="Wesley Ho" content="VFU" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--<link rel="stylesheet" type="text/css" href="styles/v1.css"/>-->
  <link rel="stylesheet" type="text/css" href="styles/v2.css"/>
  <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="lib/bootstrap/dist/css/open-iconic-bootstrap.min.css" />
  <!-- <link rel="stylesheet" href="lib/DataTables/datatables.min.css" /> -->
  <link rel="stylesheet" href="styles/site.css" />
  <link rel="stylesheet" href="styles/efa.css" />
  <link rel="stylesheet" type="text/css" href="styles/topnav.css"/>
</head>

<body>
  <div class="topnav">
    <a href="index.php">Home</a>
    <a href="catalogue.php">Catalogue</a>
    <a href="contact.php">Contact</a>
    <a class="active" href="technical.php">Technical</a>
    <a class="active mode" href="technical.php" id="light_mode">Light Mode</a>
    <a href="dark_technical.php" id="dark_mode" class="mode">Dark Mode</a>
  </div>
  <div class="alert alert-warning mb-3">
            <span class="oi oi-warning"></span>
            We highly recommend that you use a VPN when accessing this website or downloading any of our materials for your own privacy and safety. Please see below for a list of VPN suggetions. The VFU will never ask for your private information or for fees or donations from studets. If you receive requests like this please let us know.
  </div>
  <?php include 'includes/technical_contents.php';?>
</body>
</html>
