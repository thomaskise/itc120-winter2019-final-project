<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$title?></title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="<?=$robots?>" />
        <meta name="description" content="<?=$meta_description?>"/>
        <meta name="keywords" content="<?=$meta_content?>"/>
        <meta charset="utf-8">
        <script src='https://www.google.com/recaptcha/api.js?render=6LeUT4kUAAAAAF_Mw3YbkVb6GZKRYugT2SUnJj58'></script>
        <script src="https://use.fontawesome.com/f91d5068d3.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/875675983c.css">
        <link rel="stylesheet" href= "<?=CSS_PATH; ?>nav.css" />
        <link rel="stylesheet" href="<?=CSS_PATH; ?>portal.css" />
        <link rel="stylesheet" href="<?=CSS_PATH; ?>form.css" />
        <link rel="stylesheet" href="<?=CSS_PATH; ?>table.css" />    
    </head>

    <body>
<!-- START WRAPPER -->
    <div class="wrapper">
        <header>
            <h1><a href="index.php"><i class="<?=$logo?>"></i> Thom Harrington | WEB120</a></h1>
            <nav>
                <ul class="topnav" id="myTopnav">
                    <?=makeLinks($nav1)?>
                    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                </ul>
            </nav>
        </header>
<!-- header.php ends here -->        