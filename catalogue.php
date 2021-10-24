<!DOCTYPE html>
<html lang="my">

<head>
  <title>ဖက်ဒရယ် တက္ကသိုလ်</title>
  <link rel="icon" sizes="16x16 32x32 64x64" href="vfulogoonly.ico"/>
  <meta name="VFU" content="VFU" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php include 'includes/google_analytics_tag.php';?>
  <!-- <link rel="stylesheet" type="text/css" href="styles/v1.css"/> -->
  <link rel="stylesheet" type="text/css" href="styles/v2.css"/>
  <link rel="stylesheet" type="text/css" href="styles/catalogue.css" class="dark_css"/>
  <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="lib/bootstrap/dist/css/open-iconic-bootstrap.min.css" />
  <link rel="stylesheet" href="styles/site.css" class="dark_css"/>
  <link rel="stylesheet" href="styles/efa.css" class="dark_css"/>
  <script src="lib/jquery/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/topnav.css"/>
  <!-- <script src="js/catalogue.js"></script> -->
</head>

<body>
  <?php include 'includes/google_tag_manager_body.php';?>
  <div class="topnav">
    <a href="index.php">Home</a>
    <a class="active" href="catalogue.php">Catalogue</a>
    <a href="contact.php">Contact</a>
    <a href="technical.php">Technical</a>
    <a class="active mode" href="catalogue.php" id="light_mode">Light Mode</a>
    <a href="dark_catalogue.php" id="dark_mode" class="mode">Dark Mode</a>
  </div>

 <div class="mb-2 mt-2">
     <h2 class="title-color mb-3 text-center">ဖက်ဒရယ် တက္ကသိုလ်</h2>
     <h2 class="title-color mb-2 text-center">Virtual Federal University</h2>
 </div>
 <hr />
 <h3 class="center">အသံဖိုင်ဖွင့်မရလျှင် Chrome ကိုသုံးပြီး ဖွင့်ပါ</h3>
 <h3 class="center">If you can not open audio file, please use “Chrome” browser.</h3>
 <?php include 'includes/cat_table.php';?>

</body>
</html>
