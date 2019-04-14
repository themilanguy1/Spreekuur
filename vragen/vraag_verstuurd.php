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
        <title>vraag verstuurd</title>
    </head>
    <script type="text/javascript" src="../script/font-awesome/font-awesome.js"></script>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Bedankt voor u vraag!</h1>
                <h4 class="text-center">Hier zal text toevoegt zijn.</h4>
            </div>
            <div class="col-lg-12 align-bottom">
                <a href="../help.php" class="btn btn-primary btn-lg float-left " id="btnHelp"><i
                            class="far fa-question-circle"></i>&nbspHelp</a>
                <a href="../home.php" class="btn btn-primary btn-lg float-right" id="btnHome"><i
                            class="fas fa-home"></i>&nbspHome</a>
            </div>
        </div>
    </div>
    </body>
    </html>
<?php
if (Session::personalQuestionDataStatus()) {
    Session::unsetSession();
}
