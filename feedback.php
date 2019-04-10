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
    if(Session::feedbackPersonalDataStatus()) {
        echo "<a href='feedback_persoonlijke_info.php'>opnieuw informatie toevoegen</a>";
        echo "<br />";
        echo "hier komt de feedback invoer.";
    } else {
        header('Location: feedback_persoonlijke_info.php');
    }
    ?>
</div>
</body>
<html>
