<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$title?></title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <script src="https://use.fontawesome.com/6a71565c22.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src='https://www.google.com/recaptcha/api.js?render=6LeUT4kUAAAAAF_Mw3YbkVb6GZKRYugT2SUnJj58'></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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