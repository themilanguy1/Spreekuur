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
<div class="container-fluid">
    <?php
    if (Session::questionPersonalDataStatus()) {
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
                Optie: 1
            </a>
        </div>
        <br>
        <div class="row justify-content-md-center">
            <a href="form_vragen.php?vraag=2">
                Optie: 2
            </a>
        </div>
        <br>
        <div class="row justify-content-md-center">
            <a href="form_vragen.php?vraag=3">
                Optie: 3
            </a>
        </div>
    </form>
    <div class="col-16 align-bottom col-lg">
        <a href="help.php" class="btn btn-primary btn-lg float-left" id="btnHelp"><i
                    class="far fa-question-circle"></i>&nbspHelp</a>
        <a href="home.php" class="btn btn-primary btn-lg float-right" id="btnHome"><i class="fas fa-undo"></i>&nbspTerug</a>
    </div>
</div>
</body>
<html>
