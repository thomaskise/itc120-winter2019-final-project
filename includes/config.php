<?php
/*
config.php

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


switch(THIS_PAGE){
    case "index.php":
        $title='Thom Harrington Web120';
        $pageHeading="Greetings!";
        $formAutoFocus="";
        $logo="logo fa fa-home";
        break;
    case "aia.php":
        $title='Audience Issues &amp; Approch';
        $pageHeading="AIA Page";
        $formAutoFocus="";
        $logo="logo fas fa-database";
        break;
    case "flowchart.php":
        $title="Thom's Flowchart Web120";
        $pageHeading="Flowchart Page";
        $formAutoFocus="";
        $logo="logo fa fa-home";
        break;
    case "contactme.php":
        $title="Contact Thom Web120";
        $pageHeading="Get in touch!";
        $formAutoFocus="autofocus";
        $logo="logo far fa-envelope";
        break;
    default:
        $title="Thom Harringtion Web120";
        $pageHeading="How'd you get here??!!";
        $formAutoFocus="";
        $logo="logo fa fa-home";
        break;
}

/**
  reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */


//Here are the keys for the server: seattlecentral.edu
//$siteKey = "6Lf8FMkSAAAAAIR0DTQO4f0zjP-hlyBVcVTjRNB-";
//$secretKey = "6Lf8FMkSAAAAAKsfveeLDuVJBWTNOm8PvRqL9lNm";

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

//set nav array for makelinks function
    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contactme.php'] = "Contact Thom";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/

function makeLinks($linkArray)
{
    $myReturn = '';
    
    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>