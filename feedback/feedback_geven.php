<?php
require_once('../classes/Autoloader.php');
Session::start();

// Check if personal data has been set.
if (Session::personalFeedbackDataStatus()) {
    if (isset($_POST['mood']) && !empty($_POST['mood'])) {
        var_dump($_SESSION);
        // Get new id for user.
        $new_id = Utility::GetNewSqlId("id", "user");

        // Save user in database.
        $user = new FeedbackUser($_SESSION['feedback_email'], $_SESSION['feedback_sex'], $_SESSION['feedback_age_range'],
            $new_id);
        $user->saveUserInDatabase();

        // Save question in database.
        $feedback = new Feedback($_POST['mood'], $_POST['health_care_facility'], $_POST['feedback_form_text']);
        $feedback->saveFeedbackInDatabase($user->getUserId());

        // Successful input, redirect user to success page.
        header('Location: feedback_verstuurd.php');
    }
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
    <div class="container">
        <div class="row">
            <div class="card rounded-0">
                <div class="card-header">
                    <h1>Feedback</h1>
                    <p>verplichte velden *</p>
                </div>
                <div class="card-body bg-light">
                    <form method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Was de geleverde zorg naar wens?: *</h4>
                            </div>
                            <div class="col-sm-4" align="center">
                                <input type="radio" name="mood" value="slecht" id="mood-1" required>
                                <label for="mood-1">
                                    <img src="../img/bad.png" alt="slecht" class="rounded d-block">
                                </label>
                            </div>
                            <div class="col-sm-4" align="center">
                                <input type="radio" name="mood" value="matig" id="mood-2">
                                <label for="mood-2">
                                    <img src="../img/ok.png" alt="matig" class="rounded d-block">
                                </label>
                            </div>
                            <div class="col-sm-4" align="center">
                                <input type="radio" name="mood" value="goed" id="mood-3">
                                <label for="mood-3">
                                    <img src="../img/good.png" alt="goed" class="rounded d-block">
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="zorginstelling">Zorginstelling: *</label>
                            <select class="form-control form-control-md rounded-0" name="health_care_facility" required>
                                <option disabled selected value> -- kies een zorginstelling --</option>
                                <option value="Maasstadziekenhuis">Maasstadziekenhuis</option>
                                <option value="Revalidatiecentrumrotterdamzuid">revalidatiecentrum rotterdam</option>
                                <option value="ErasmusMC">Erasmus MC</option>
                            </select>
                            <br>
                            <label for="feedback_textarea">Uw feedback : </label>
                            <textarea name="feedback_form_text" class="form-control form-control-md rounded-0"
                                      rows="10"></textarea>
                        </div>
                        <a href="persoonlijke_info_invoer.php" class="btn btn-primary btn-lg float-left mx-2"
                           id="btnBack"><i
                                    class="fas fa-undo"></i>&nbspTerug</a>
                        <button type="submit" name="submit" class="btn btn-success btn-lg float-right" id="btnSend"><i
                                    class="far fa-share-square"></i>&nbspVersturen
                        </button>
                    </form>
                </div>
            </div>
    </body>
    </html>
    <?php
} else {
    header('Location: persoonlijke_info_invoer.php');
}
?>