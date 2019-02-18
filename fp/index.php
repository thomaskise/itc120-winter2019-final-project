<?php include 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
<!--
    <link rel="stylesheet" href="css/default_cic.css" />
    <link rel="stylesheet" href= "css/nav_cic.css" />
    <link rel="stylesheet" href="css/form.css" />
-->
    <link rel="stylesheet" href="css/underconstruction.css" />
<!--
    <link rel="stylesheet" href="css/nav_exp.css" />
    <link rel="stylesheet" href="css/approach2.css" />
-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />-->
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
    <header>
<!--
        <div class="logo">
            <p>Clay's</p>
            <p>Cool</p>
        </div>
-->
        <div class="heading">
            <h1>Clay's Cool Template</h1>
        </div>
    </header>
    
        
    <main>
<!-- Sidebar nav -->
        <div class="bottom_sidebar">
          <a class="s-sidebar__trigger" href="#0">
             <i class="fa fa-bars"></i>
          </a>

          <nav class="s-sidebar__nav">
             <ul>
                <?=makeLinks($nav1)?>
             </ul>
          </nav>
        </div>


    <!-- Content -->
 

       <section>
          <h2>Final Project - Soon to come</h2>
          <p>This will be cool, but it comes later in the quarter</p>
       </section>
        <aside>
            <h2>image goes here</h2>
        </aside>
    </main>


    
 
<!-- START footer.php -->
    <!-- start footer -->
    <hr class="footer">
    <footer class="footer_content">
        <p><small>
            <strong>
                For information on Clay's Cool contact: 
                <a href="/contact.php">Clay's Cool email </a>
                206.325.3626 (voice) 
            </strong><BR />
            &copy; 2016 - <?=date("Y")?> Design &amp; Development by 
                <a href="https://www.purplemoondesign.com">Purple Moon Design LLC</a>. All rights reserved.<BR />
            <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML5</a>
            ~ 
            <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
        </small></p>
    </footer>
</div>
<!-- END WRAPPER -->
</body>
</html>

