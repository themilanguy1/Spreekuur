<?php
require_once('classes/Autoloader.php');
Session::Start();
if (isset($_GET['vraag'])){
    $vraag = $_GET['vraag'];
}else{
    echo "Maak een keuze voor vraag a.u.b.";
    $vraag = null;
}
if (isset($_POST['question_data'])){
    // TODO Send data to class where it's gonna be saved in database(what about the user:Need to discuss.)
//    $question_data = new Question($_POST['question_data']);
};
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
   <h1>Uw keuze is : <?= $vraag ?></h1>
    <form method="post">
    <div class="form-group">
        <label for="question_textarea">Example textarea</label>
        <textarea name="question_data" class="form-control" rows="10"></textarea>
    </div>
        <button type="submit" name="submit" class="btn btn-success btn-lg float-right" id="btnSend">Stuur
        </button>
    </form>
    <br>
    <a href="help.php" class="btn btn-primary btn-lg float-left " id="btnHelp"><i class="far fa-question-circle"></i>Help</a>
    <a href="vragen.php" class="btn btn-primary btn-lg float-left mx-2" id="btnLogin"><i class="fas fa-sign-in-alt"></i>Terug</a>
</div>
</body>
</html>

