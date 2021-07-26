<!DOCTYPE html>
<html lang="my">

<head>
  <title>ဖက်ဒရယ် တက္ကသိုလ်</title>
  <link rel="icon" sizes="16x16 32x32 64x64" href="vfulogoonly.ico"/>
  <meta name="VFU" content="VFU" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php include 'includes/google_analytics_tag.php';?>
  <!--<link rel="stylesheet" type="text/css" href="styles/v1.css"/>-->
  <link rel="stylesheet" type="text/css" href="styles/v2.css"/>
  <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="lib/bootstrap/dist/css/open-iconic-bootstrap.min.css" />
  <!-- <link rel="stylesheet" href="lib/DataTables/datatables.min.css" /> -->
  <link rel="stylesheet" href="styles/dark-mode/site.css" />
  <link rel="stylesheet" href="styles/dark-mode/efa.css" />
  <link rel="stylesheet" type="text/css" href="styles/topnav.css"/>
</head>

<body>
  <?php include 'includes/google_tag_manager_body.php';?>
  <div class="topnav">
    <a href="dark_index.php">Home</a>
    <a href="dark_catalogue.php">Catalogue</a>
    <a href="dark_contact.php">Contact</a>
    <a class="active" href="dark_technical.php">Technical</a>
    <a href="technical.php" id="light_mode" class="mode">Light Mode</a>
    <a class="active mode" href="dark_technical.php" id="dark_mode">Dark Mode</a>
  </div>

  <?php include 'includes/technical_contents.php';?>
</body>
</html>
