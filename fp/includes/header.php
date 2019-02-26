<?php include 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/f91d5068d3.js"></script>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/875675983c.css">
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/flex.css" />
</head>
<body>
<!-- Content -->
<header>
    <div class="logo">
        <img src="images/pmdbutton.gif" alt="template image" id="logoimage" />
    </div>
    <div class="heading">
        <h1><?=$pageHeading?></h1>
        <p>Pellentesque habitant morbi tristique senectus.</p>
    </div>
    <div class="s-layout">
        <!-- Sidebar -->
        <div class="s-layout__sidebar">
          <a class="s-sidebar__trigger" href="#0">
             <i style="font-size: -webkit-xxx-large" class="fa fa-bars"></i>
          </a>
          <nav class="s-sidebar__nav">
            <ul><?=makeLinks($nav1)?></ul>
          </nav>      
        </div>
    </div> <!-- closes <div class="s-layout"> -->
</header>
<!-- header ends here -->