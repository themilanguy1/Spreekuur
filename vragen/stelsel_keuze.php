<?php
require_once('../classes/Autoloader.php');
Session::start();

// Check if personal data has been set.
if (Session::personalQuestionDataStatus()) {
    ?>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
        <title>Lichaam stelsel keuze</title>
    </head>
    <script type="text/javascript" src="../script/font-awesome/font-awesome.js"></script>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href='persoonlijke_info_invoer.php'>
                    <button class="btn btn-primary">opnieuw informatie toevoegen</button>
                </a>
            </div>
            <div class="col-lg-12" style="margin-top:1em;">
                <form method="get">
                    <div class="justify-content-md-center">
                        <a href="vraag_stellen.php?lichaam_stelsel=Orgaan stelsel">
                            Optie: 1
                        </a>
                    </div>
                </form>
            </div>
            <div class="align-bottom col-lg">
                <a href="persoonlijke_info_invoer.php" class="btn btn-primary btn-lg float-left" id="btnHome"><i
                            class="fas fa-undo"></i>&nbspTerug</a>
            </div>
        </div>
    </div>
    </body>
    </html>
    <?php
} else {
    // Question personal data not set, redirect to form.
    header("Location: persoonlijke_info_invoer.php");
}