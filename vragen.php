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
</head>
<script type="text/javascript" src="script/font-awesome/font-awesome.js"></script>
<body>
<div class="container">
    <?php
    if(Session::questionPersonalDataStatus()) {
        echo "<a href='vragen_persoonlijke_info.php'>opnieuw informatie toevoegen</a>";
        echo "<br />";
        echo "hier komt de vragen invoer.";
    } else {
        header('Location: vragen_persoonlijke_info.php');
    }
    ?>
    <form method="get">
    <div class="row justify-content-md-center">
        <a href="form_vragen.php?vraag=1">
            <img src="img/feedback.jpg" alt="Geen afbeelding gevonden" class="rounded mx-auto d-block"
                 style="width:200px;height:200px;">
        </a>
    </div>
    <br>
    <div class="row justify-content-md-center">
        <a href="form_vragen.php?vraag=2">
            <img src="img/vragen.jpg" alt="Geen afbeelding gevonden" class="rounded mx-auto d-block"
                 style="width:200px;height:200px;">
        </a>
    </div>
    <br>
    <div class="row justify-content-md-center">
        <a href="form_vragen.php?vraag=3">
            <img src="img/mail.png" alt="Geen afbeelding gevonden" class="rounded mx-auto d-block"
                 style="width:200px;height:200px;">
        </a>
    </div>
    </form>
    <a href="help.php" class="btn btn-primary btn-lg float-left " id="btnHelp"><i class="far fa-question-circle"></i>Help</a>
    <a href="login.php" class="btn btn-primary btn-lg float-right " id="btnLogin"><i class="fas fa-sign-in-alt"></i>Login</a>
</div>
</body>
<html>
