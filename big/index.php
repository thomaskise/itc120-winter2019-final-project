<?php include 'includes/config.php'?>
<?php include 'includes/header.php'?>    
<!-- START LEFT COL -->
        <section>
            <h2 class="pageID"><?=$sectionHeading?></h2>
            <?php
            /*
             * Below are 2 different forms to be re-used       
             * 
             * Only use one at a time, comment out the other 1!       
             *
             */
            include 'includes/multiple.php'; #multiple element contact form
            ?>
            <p class="clear-recaptcha"></p>
        </section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
        <aside>
            <BR /><BR />
            <p>list of client resources </p>
            <p>list some of my favorite sites that helps clients - color-responsive-etc</p>
        </aside>
<!-- END RIGHT COL -->
 
<?php include 'includes/footer.php'?>
