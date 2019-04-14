<?php
require_once('../classes/Autoloader.php');
Session::start();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
</head>
<script type="text/javascript" src="../script/font-awesome/font-awesome.js"></script>
<body>
<?php
if (Session::feedbackPersonalDataStatus()) {
    echo "<a href='persoonlijke_info_invoer.php'>opnieuw informatie toevoegen</a>";
    echo "<br />";
    echo "hier komt de feedback invoer.";
} else {
    header('Location: persoonlijke_info_invoer.php');
}
?>
<div class="container-fluid">
    <div class="col-16 align-bottom col-lg">
        <a href="../help.php" class="btn btn-primary btn-lg float-left" id="btnHelp"><i class="far fa-question-circle"></i>&nbspHelp</a>
        <a href="../home.php" class="btn btn-primary btn-lg float-right" id="btnBack"><i class="fas fa-undo"></i>&nbspTerug</a>
    </div>
</div>
</body>
<html>
