<?php
/*
config.php for fp

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
switch(THIS_PAGE){
    case "index.php":

        $title="Template";
        $pageHeading="Template";
        $sectionHeading="Get in touch! We'd love to learn more about you!";
        $classSelected='"class="selected"';
        $formAutoFocus="autofocus";
        $logo="fa fa-fw fa-home";
        break;
    default:
        $title="Page Not Live";
        $pageHeading="New Page Coming Soon!";
        $sectionHeading="Cool stuff coming soon!";
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
/*
 * creates navigation links wrapped in <ul> & <li> tags
 *
 *
 * returns [text] fully formatted nav element tags
 */

//set nav array for makelinks function
    $nav1["index.php"] = '<i class="fa fa-home"></i><em>Home';
    $nav1["classes.php"] = '<i class="fa fa-asterisk"></i><em>Classes Offered';
    $nav1["about.php"] = '<i class="fa fa-question"></i><em>About Clay\'s Cool';
    $nav1["contact.php"] = '<i class="fa fa-envelope"></i><em>Contact Clay\'s Cool';
    $nav1['https://www.purplemoondesign.com/pages/aboutTheArtist.htm" target="_blank'] = '<i class="fa fa-user"></i><em>Instructor Bio';

function makeLinks($linkArray)
{
    $myReturn = '';
    
    foreach($linkArray as $url => $text)
    {

        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li> <a style="color:red" class="s-sidebar__nav-link" href="' . $url . '">' . $text . '</em></a></li>'  . PHP_EOL;
    	}else{
	    	$myReturn .= '<li> <a class="s-sidebar__nav-link" href="' . $url . '">' . $text . '</em></a></li>'  . PHP_EOL;
    	} 
        
    }
    return $myReturn;    
}

?>