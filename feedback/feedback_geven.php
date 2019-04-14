<?php
require_once('../classes/Autoloader.php');
Session::start();

if (isset($_POST['submit'])) {
    var_dump($_POST);
} else {
    echo "fuck off";
}
?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
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
    <h1>Feedback</h1>
    <form method="post">
        <div class="row">
            <label>Uw reactie : </label>
            <div class="col-xs-4">
                <input type="radio" name="reaction" value="1" id="iets-1" required>
                <label for="iets-1">
                    <img src="../img/bad.png" alt="Geen afbeelding gevonden" class="rounded float-left mx-5 d-block">
                </label>
            </div>
            <div class="col-xs-4">
                <input type="radio" name="reaction" value="2" id="iets-2" required>
                <label for="iets-2">
                    <img src="../img/ok.png" alt="Geen afbeelding gevonden" class="rounded float-left mx-5 d-block">
                </label>
            </div>
            <div class="col-xs-4">
                <input type="radio" name="reaction" value="1" id="iets-3" required>
                <label for="iets-3">
                    <img src="../img/good.png" alt="Geen afbeelding gevonden" class="rounded float-left mx-5 d-block">
                </label>
            </div>
        </div>
        <div class="form-group">
            <br>
            <label>Uw zorginstelling : </label>
            <select name="feedback_zorg">
                <option value="zorginstelling1">Zorginstellling 1</option>
                <option value="zorginstelling2">Zorginstellling 2</option>
                <option value="zorginstelling3">Zorginstellling 3</option>
            </select>
            </br></br>
            <label for="feedback_textarea">Uw feedback : </label>
            <textarea name="feedback_form_text" class="form-control" rows="10"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-success btn-lg float-right" id="btnSend"><i
                    class="far fa-share-square"></i>Versturen
        </button>
    </form>
    <br>
    <div class="col-16 align-bottom col-lg">
        <a href="../help.php" class="btn btn-primary btn-lg float-left " id="btnHelp"><i
                    class="far fa-question-circle"></i>&nbspHelp</a>
        <a href="../home.php" class="btn btn-primary btn-lg float-left mx-2" id="btnBack"><i class="fas fa-undo"></i>&nbspTerug</a>
    </div>
</div>
</body>
<html>
