<?php
/*
config.php for big

stores configuration information for our web application
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
*/

//removes header already sent errors
ob_start();

include 'credentials.php';
    
define('SECURE',true); #force secure, https, for all site pages

header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching

define('DEBUG',true); #we want to see all errors 

//define the parent folder of the current page as a constant - save for later use
define('PAGE_PARENT',basename(dirname($_SERVER['PHP_SELF'])));

//define the current page name as a constant
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$classSelected="";
$pageHeading=" Thom Harrington | Web Examples &amp; Research";
switch(THIS_PAGE){
    case "../index.php":
        $title="Thom Harrington Web120";
        $pageHeading="Greetings!";
        $sectionHeading=" Greetings!";
        $formAutoFocus="";
        $logo="fa fa-fw fa-home";
        break;
    case "index.php":
        $title="Thom's Big Home Page";
        $sectionHeading=" Get in touch! We'd love to learn more about you!";
        $classSelected='"class="selected"';
        $formAutoFocus="autofocus";
        $logo="fa fa-envelope";
        break;
    case "flexbox.php":
        $title="Flexbox";
        $sectionHeading=" Flexbox Offers Responsiveness!";
        $classSelected='"class="selected"';
        $logo="fa fa-magic";
        break;
     case "galleries.php":
        $title="Image Galleries";
        $sectionHeading=" Snazzy websites : Image Galleries";
        $formAutoFocus="autofocus";
        $classSelected='"class="selected"';
        $logo="fa fa-picture-o";
        break;
     case "calendar.php":
        $title="Calendar";
        $sectionHeading=" Thom's Calendar!";
        $formAutoFocus="autofocus";
        $classSelected='"class="selected"';
        $logo="fa fa-calendar";
        break;
     case "map.php":
        $title="Google Map - SCC";
        $sectionHeading=" Map to Seattle Central College";
        $classSelected='"class="selected"';
        $logo="fa fa-map-marker";
        break;
     case "youtube.php":
        $title="YouTube Video";
        $sectionHeading=" Jefferson Airplane - White Rabbit!";
        $logo="fa fa-youtube";
        break;
     case "shoppingcarts.php":
        $title="Shopping Carts";
        $sectionHeading=" Shopping Carts!";
        $classSelected='"class="selected"';
        $logo="fa fa-shopping-cart";
        break;
     case "siteapp.php":
        $title="Responsive vs Mobile";
        $sectionHeading=" Biggest Bang for the Future: Responsive vs Mobile";
        $formAutoFocus="autofocus";
        $classSelected='"class="selected"';
        $logo="fa fa-mobile";
        break;
     case "webcam.php":
        $title="Refreshing iFramed Webcam";
        $sectionHeading=" Webcam!";
        $classSelected='"class="selected"';
        $logo="fa fa-video-camera";
        break;
    default:
        $title="Page Not Live";
        $sectionHeading=" Cool stuff coming soon!";
        $classSelected='"class="selected"';
        $formAutoFocus="";
        $logo="fa fa-hammer";
        break;
}


//prevents date errors
    date_default_timezone_set('America/Los_Angeles');

//force secure website
    if (SECURE && $_SERVER['SERVER_PORT'] != 443) {#force HTTPS
        header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    }else{//adjust protocol
        $protocol = (SECURE==true ? 'https://' : 'http://'); // returns true
    }

//set sub_folder when site is not in root folder - be sure to add trailing slash!
    $sub_folder = 'web120/';

//set virtual path to web root in site subfolder
    $virtual_path = $protocol . $_SERVER["HTTP_HOST"] . '/' . $sub_folder;

//will add sub-folder if not loaded to root:
    $physical_path = 'www' . $_SERVER["DOCUMENT_ROOT"] . '/' . $sub_folder;

//define subfolder paths
    define('INCLUDE_PATH', $physical_path . 'includes/');
    define('CSS_PATH', $virtual_path . 'css/');
    define('IMAGE_PATH', $virtual_path . 'images/');
    define('BIG_PATH', $virtual_path . 'big/');
    define('FP_PATH', $virtual_path . 'fp/');
    define('JS_PATH', $virtual_path . 'js/');
    define('V_PATH', $virtual_path);



?>