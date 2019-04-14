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
                <?php
                echo "<a href='persoonlijke_info_invoer.php'>opnieuw informatie toevoegen</a>";
                echo "<br />";
                echo "hier komt de vragen invoer.";
                ?>
            </div>
            <div class="col-lg-12">
                <form method="get">
                    <div class="justify-content-md-center">
                        <a href="vraag_stellen.php?lichaam_stelsel=1">
                            Optie: 1
                        </a>
                    </div>
                    <br>
                    <div class="justify-content-md-center">
                        <a href="vraag_stellen.php?lichaam_stelsel=2">
                            Optie: 2
                        </a>
                    </div>
                    <br>
                    <div class="justify-content-md-center">
                        <a href="vraag_stellen.php?lichaam_stelsel=3">
                            Optie: 3
                        </a>
                    </div>
                </form>
            </div>
            <div class="align-bottom col-lg">
                <a href="../home.php" class="btn btn-primary btn-lg float-left" id="btnHome"><i class="fas fa-undo"></i>&nbspTerug</a>
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