<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<!-- START LEFT COL -->
        <section>
            <h2 class="pageID"><?=$pageHeading?></h2>
            <?php
            /*
             * Below are 2 different forms to be re-used       
             * 
             * Only use one at a time, comment out the other 1!       
             *
             */
            include 'includes/simple.php'; #demonstrates a simple contact form
            //include 'includes/multiple.php';#demonstrates multiple form elements
	        ?>
	        <p class="clear-recaptcha"></p>
        </section>

<?php include 'includes/footer.php';?>
