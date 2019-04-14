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
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <a href="feedback/feedback_geven.php">
                <img src="img/feedback.jpg" alt="feedback" class="rounded mx-auto d-block"
                     style="width:200px;height:200px;">
            </a>
        </div>

        <br>
        <div class="col-lg-12">
            <a href="vragen/stelsel_keuze.php">
                <img src="img/vragen.jpg" alt="vraag stellen" class="rounded mx-auto d-block"
                     style="width:200px;height:200px;">
            </a>
        </div>
        <br>
        <div class="col-lg-12">
            <a href="inbox.php">
                <img src="img/mail.png" alt="berichten inbox" class="rounded mx-auto d-block"
                     style="width:200px;height:200px;">
            </a>
        </div>
        <br>

        <div class="col-16 align-bottom col-lg">
            <a href="help.php" class="btn btn-primary btn-lg float-left " id="btnHelp"><i
                        class="far fa-question-circle"></i>&nbspHelp</a>
        </div>
    </div>
</div>
</body>
</html>
