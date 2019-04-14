<?php
require_once('../classes/Autoloader.php');
Session::start();

// Check if personal data has been set.
if (Session::personalQuestionDataStatus()) {
    // Custom alert for empty body part choice.
    if (isset($_GET['lichaam_stelsel']) && !empty($_GET['lichaam_stelsel'])) {
        $vraag = $_GET['lichaam_stelsel'];
    } else {
        ?>
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <h4 class='alert-heading'>Warning Message!</h4>
            <p>Maak een keuze voor vraag a.u.b.</p>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        <?php
        $vraag = null;
    }

    // Custom alert for empty text field in form.
    if (isset($_POST['question_form_text']) && !empty($_POST['question_form_text'])) {
        // Get new id for user.
        $new_id = Utility::GetNewSqlId("id", "user");
        // Save user in database.
        $user = new QuestionUser($_SESSION['question_name'], $_SESSION['question_email'], $_SESSION['question_sex'],
            $_SESSION['question_age_range'], $_SESSION['question_phone_number'], $_SESSION['question_medication'],
            $_SESSION['question_health_issues'], $_SESSION['question_extra_info'], $new_id);
        $user->insertIntoDatabase();

        // Save question in database.
        $question = new Question($_GET['lichaam_stelsel'], $_POST['question_form_text']);
        $question->insertIntoDatabase($user->getUserId());

        // Successful input, redirect user to success page.
        header('Location: vraag_verstuurd.php');
    } else {
        ?>
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <h4 class='alert-heading'>Warning Message!</h4>
            <p>Typ iets in het veld</p>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        <?php
    }
    ?>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
        <title>Vraag stellen</title>
    </head>
    <script type="text/javascript" src="../script/font-awesome/font-awesome.js"></script>
    <script type="text/javascript" src="../script/jquery-3.3.1.js"></script>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card rounded-0">
                    <div class="card-header">
                        <h1 class="mb-0">Uw keuze is : <?= $vraag ?></h1>
                    </div>
                    <div class="card-body bg-light">
                        <form method="post">
                            <div class="form-group">
                                <label for="question_textarea">Example textarea</label>
                                <textarea name="question_form_text" class="form-control" rows="10"></textarea>
                            </div>
                            <a href="stelsel_keuze.php" class="btn btn-primary btn-lg float-left" id="btnBack"><i
                                        class="fas fa-undo"></i>&nbspTerug</a>
                            <button type="submit" name="submit" class="btn btn-success btn-lg float-right" id="btnSend"><i
                                        class="far fa-share-square"></i>Stuur
                            </button>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
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
    <?php
} else {
    // Question personal data not set, redirect to form.
    header("Location: persoonlijke_info_invoer.php");
}
