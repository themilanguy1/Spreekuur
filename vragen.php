<?php
require_once('classes/Autoloader.php');
Session::Start();
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
    if(Session::PersonalDataStatus()) {
        echo "Je hebt informatie gegeven";
        echo "<br />";
        echo "<h3>PLACEHOLDER WAIT TILL REINFORCEMENTS ARRIVE</h3>";
    } else {
        header('Location: vragen_persoonlijke_info.php');
    }
    ?>
</div>
</body>
<html>
