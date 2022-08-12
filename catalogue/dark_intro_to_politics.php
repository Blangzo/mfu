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
  <link rel="stylesheet" type="text/css" href="../styles/v2.css"/>
  <link rel="stylesheet" href="../lib/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../lib/bootstrap/dist/css/open-iconic-bootstrap.min.css" />
  <!-- <link rel="stylesheet" href="lib/DataTables/datatables.min.css" /> -->
  <link rel="stylesheet" href="../styles/dark-mode/site.css" class="dark_css"/>
  <link rel="stylesheet" href="../styles/dark-mode/efa.css" class="dark_css"/>
  <link rel="stylesheet" type="text/css" href="../styles/topnav.css"/>
  <link rel="stylesheet" type="text/css" href="../styles/dark-mode/catalogue.css" class="dark_css"/>
</head>

<body>
  <?php include 'includes/google_tag_manager_body.php';?>
  <div class="topnav">
    <a href="../dark_index.php">Home</a>
    <a class="active" href="../dark_catalogue.php">Catalogue</a>
    <a href="../dark_contact.php">Contact</a>
    <a href="../dark_technical.php">Technical</a>
    <a class="mode" href="intro_to_politics.php" id="light_mode">Light Mode</a>
    <a href="dark_intro_to_politics.php" id="dark_mode" class="active mode">Dark Mode</a>
  </div>

  <div class="mb-2 mt-2">
      <h2 class="title-color mb-3 text-center">ဖက်ဒရယ် တက္ကသိုလ်</h2>
      <h2 class="title-color mb-2 text-center">Virtual Federal University</h2>
  </div>
  <hr />
 <?php include './intro_to_politics_include.php';?>
    <form class="course">
      <button onclick="location.href='../catalogue.php'" type="button">Back to catalogue</button>
    </form>
  </body>
  </html>
