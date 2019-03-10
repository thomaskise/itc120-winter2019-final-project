<?php include 'includes/header.php';?>

<!-- Content -->
<main class="s-layout__content">
    <section>
            <h2 class="pageID"><?=$sectionHeading?></h2>
            <?php
            /*
             * Below are 2 different forms to be re-used       
             * 
             * Only use one at a time, comment out the other 1!       
             *
             */
            include 'includes/multiple.php'; #demonstrates a simple contact form
            //include 'includes/multiple.php';#demonstrates multiple form elements
	        ?>
	        <p class="clear-recaptcha"></p>
    </section>
<!--aside has no content for home page -->
  <aside>
    <img src="images/<?=$pageImage?>" alt="<?=$altText?>" id="pagepic" />
    <p><?=$imagelabel?></p>
  </aside>
</main>
<?php include 'includes/footer.php';?>
