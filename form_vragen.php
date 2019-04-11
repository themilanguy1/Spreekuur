<?php
require_once('classes/Autoloader.php');
Session::Start();
if (isset($_GET['vraag'])) {
    $vraag = $_GET['vraag'];
} else {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <h4 class='alert-heading'>Warning Message!</h4>
  <p>Maak een keuze voor vraag a.u.b.</p>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
    $vraag = null;
}
if (isset($_POST['question_data'])) {
    // TODO Send data to class where it's gonna be saved in database(what about the user:Need to discuss.)
    if (!empty($_POST['question_data'])) {
        echo "<h5>Hier print input data [TEST]:</h5>";
        echo "<h6>" . $_POST['question_data'] . "</h6>";
        $question_form_data = new Question($_POST['question_data']);
        $question_form_data->sendFormQuestion();
    } else {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <h4 class='alert-heading'>Warning Message!</h4>
  <p>Typ iets in het veld</p>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
    }};
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
</head>
<script type="text/javascript" src="script/font-awesome/font-awesome.js"></script>
<script type="text/javascript" src="script/jquery-3.3.1.js"></script>
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
    <a href="help.php" class="btn btn-primary btn-lg float-left " id="btnHelp"><i class="far fa-question-circle"></i&nbsp>Help</a>
    <a href="vragen.php" class="btn btn-primary btn-lg float-left mx-2" id="btnBack"><i class="fas fa-undo"></i>&nbspTerug</a>
</div>
</body>
</html>
<script>
    $(document).ready(function () {
        $(".close").on('click', function () {
            let alert = $(".alert");
            alert.removeClass('fade show');
            alert.addClass('fade hide');
        });
    })
</script>

