<?php include 'includes/config.php'?>
<?php include 'includes/header.php'?>    

<section>
    <h2 class="pageID"><i class="<?=$logo?>"></i><?=$sectionHeading?></h2>
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

<aside>
    <h2>Helpful resources</h2><br />
    <ul>
        <li><a href="http://fearlessideas.org/" target="_blank">Fearless Ideas </a><i class="fa fa-external-link-square" aria-hidden="true"></i> If you want a dedicated space to inform your users of important announcements, this site uses an &quot;announcement area&quot; in the upper left. In addition to having a place where you can post important updates, it can be used to feature sales items and other potentially revenue generating advertisements.</li>
        <li><a href="https://www.creativehandsstudio.net//" target="_blank">Creative Hands Art School </a><i class="fa fa-external-link-square" aria-hidden="true"></i> This site uses a concept that rotates the text with a variety of messages. Consider also rotating these overlays so the user is not always seeing the same tag line.</li>
        <li><a href="https://www.artscorps.org/programs/" target="_blank">Arts Corp </a><i class="fa fa-external-link-square" aria-hidden="true"></i> The banner across the top of the page scales nicely to a mobile format also.</li>
    </ul>
</aside>
 
<?php include 'includes/footer.php'?>
