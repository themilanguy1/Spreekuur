<?php
	require_once('classes/Autoloader.php');
	Session::start();
	
	//TODO fix spans with border:primary.
	// Dont know whats wrong with them.
?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
    <!--    <link rel="stylesheet" type="text/css" href="style/style.css">-->
    <title>home</title>
</head>
<script type="text/javascript" src="script/font-awesome/font-awesome.js"></script>
<body>
<!--<body class="background">-->
<div class="container">
    <div class="row ">
        <div class="col-lg-12" align="center" style="margin-top:1em;">
            <h4>Vraag stellen</h4>
            <a href="vragen/stelsel_keuze.php">
                <img src="img/002-feedback.png" alt="vraag stellen" class="rounded mx-auto d-block"
                     style="width:200px;height:200px;">
            </a>
        </div>
        <div class="col-lg-12" align="center" style="margin-top:1em;">
            <h4>Feedback geven</h4>
            <a href="feedback/feedback_geven.php">
                <img src="img/001-info.png" alt="feedback" class="rounded mx-auto d-block"
                     style="width:200px;height:200px;">
            </a>
        </div>
        <div class="col-lg-12" align="center" style="margin-top:1em;">
            <h4>Berichten inbox</h4>
            <a href="inbox.php">
                <img src="img/003-files-and-folders.png" alt="berichten inbox" class="rounded mx-auto d-block"
                     style="width:200px;height:200px;">
            </a>
        </div>

        <div class="col-16 align-bottom col-lg">
            <a href="help.php" class="btn btn-primary btn-lg float-left " id="btnHelp"><i
                        class="far fa-question-circle"></i>&nbspHelp</a>
        </div>
    </div>
</div>
</body>
</html>
