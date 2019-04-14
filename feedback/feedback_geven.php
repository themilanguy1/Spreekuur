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
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>Feedback geven</title>
</head>
<script type="text/javascript" src="../script/font-awesome/font-awesome.js"></script>
<body>
<?php
if (Session::personalFeedbackDataStatus()) {
    echo "<a href='persoonlijke_info_invoer.php'>opnieuw informatie toevoegen</a>";
    echo "<br />";
    echo "hier komt de feedback invoer.";
} else {
    header('Location: persoonlijke_info_invoer.php');
}
?>
<div class="container">
    <div class="row">
        <div class="card rounded-0">
            <div class="card-header">
                <h1>Feedback</h1>
            </div>
            <div class="card-body bg-light">
                <form method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Was de geleverde zorg naar wens?: </h4>
                        </div>
                        <div class="col-sm-4" align="center"><input type="radio" name="reaction" value="1" id="mood-1"
                                                                    required>
                            <label for="mood-1">
                                <img src="../img/bad.png" alt="slecht"
                                     class="rounded d-block">
                            </label>
                        </div>
                        <div class="col-sm-4" align="center"><input type="radio" name="reaction" value="2" id="mood-2"
                                                                    required>
                            <label for="mood-2">
                                <img src="../img/ok.png" alt="matig"
                                     class="rounded d-block">
                            </label>
                        </div>
                        <div class="col-sm-4" align="center">
                            <input type="radio" name="reaction" value="1" id="mood-3" required>
                            <label for="mood-3">
                                <img src="../img/good.png" alt="goed"
                                     class="rounded d-block">
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <br>
                        <label>Uw zorginstelling : </label>
                        <select name="feedback_zorg">
                            <option value="Maasstadziekenhuis">Maasstadziekenhuis</option>
                            <option value="Revalidatiecentrumrotterdamzuid">revalidatiecentrum rotterdam zuid</option>
                            <option value="ErasmusMC">Erasmus MC</option>
                        </select>
                        <br><br>
                        <label for="feedback_textarea">Uw feedback : </label>
                        <textarea name="feedback_form_text" class="form-control" rows="10"></textarea>
                    </div>
                    <a href="persoonlijke_info_invoer.php" class="btn btn-primary btn-lg float-left mx-2" id="btnBack"><i
                                class="fas fa-undo"></i>&nbspTerug</a>
                    <button type="submit" name="submit" class="btn btn-success btn-lg float-right" id="btnSend"><i
                                class="far fa-share-square"></i>&nbspVersturen
                    </button>
                </form>
            </div>
        </div>
</body>
</html>
