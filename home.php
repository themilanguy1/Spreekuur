<?php
require_once('classes/Autoloader.php');
Session::start();
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
<!--    <link rel="stylesheet" type="text/css" href="style/style.css">-->
</head>
<script type="text/javascript" src="script/font-awesome/font-awesome.js"></script>
<body>
<!--<body class="background">-->
<div class="container">
    <div class="row justify-content-md-center">
    <a href="feedback.php">
        <img src="img/feedback.jpg" alt="Geen afbeelding gevonden" class="rounded mx-auto d-block"
             style="width:200px;height:200px;">
    </a>
    </div>
    <br>
<div class="row justify-content-md-center">
<a href="vragen.php">
        <img src="img/vragen.jpg" alt="Geen afbeelding gevonden" class="rounded mx-auto d-block"
             style="width:200px;height:200px;">
    </a>
</div>
    <br>
    <div class="row justify-content-md-center">
    <a href="inbox.php">
        <img src="img/mail.png" alt="Geen afbeelding gevonden" class="rounded mx-auto d-block"
             style="width:200px;height:200px;">
    </a>
    </div>
    <a href="help.php" class="btn btn-primary btn-lg float-left " id="btnHelp"><i class="far fa-question-circle"></i>&nbspHelp</a>
</div>
</body>
</html>
