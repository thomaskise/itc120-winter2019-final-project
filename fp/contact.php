<?php include 'includes/header.php';
/**
 *************************************************************************
 *
 *  contact.php
 *
 *************************************************************************
 *
 *
 * @package Clay's Cool
 * @subpackage Public Site
 * @author Thom Harrington
 * @version 0.1 March 23, 2019
 * @link https://clayiscool.com (when launched)
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @todo none
 **/
?>
<!-- Content -->
    <div class="content">
        <section>
            <h2 class="pageID"><?=$sectionHeading?></h2>
            <?php include 'includes/multiple.php'; #demonstrates a simple contact form?>
            <p class="clear-recaptcha"></p>
        </section>
            <div> <!--div tag attemps to trigger css to hide the asside on mobile-->
                <?php include 'includes/aside.php';?>
            </div>
    </div>
</main>
<?php include 'includes/footer.php';?>
