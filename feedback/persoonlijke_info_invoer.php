<?php
require_once('../classes/Autoloader.php');
Session::start();

if (isset($_POST['name'])) {
    $feedback_personal_data = new FeedbackUser(
        $_POST['name'], $_POST['email'], $_POST['sex'], $_POST['age_range']
    );
    $feedback_personal_data->setFeedbackPersonalData();
    header('Location: feedback_geven.php');
}
?>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
    <title>persoonlijke info invoer</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="card rounded-0">
            <div class="card-header">
                <h4 class="mb-0">Voordat u uw feedback achterlaat zouden wij nog wat informatie van u willen vragen. </h4>
                <h4>Dit is volkomen <b>optioneel</b>.</h4>
            </div>
            <div class="card-body bg-light">
                <form class="form" method="POST">
                    <div class="form-group">
                        <label>Voornaam</label>
                        <input type="text" class="form-control form-control-md rounded-0" name="name"
                               placeholder="Kees Janssen">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control form-control-md rounded-0" name="email" id="email"
                               placeholder="Voorbeeld@email.com">
                        <br>
                        <label>Geslacht</label>
                        <input type="radio" name="sex" value="M"> Man
                        <input type="radio" name="sex" value="V"> Vrouw
                        <br>
                        <label>Leeftijdsgroep</label>
                        <select name="age_range">
                            <option disabled selected value> -- kies een leeftijd -- </option>
                            <option value="0-15">0-15</option>
                            <option value="16-25">16-25</option>
                            <option value="26-35">26-35</option>
                            <option value="26-35">26-35</option>
                            <option value="46-55">46-55</option>
                            <option value="56-65">56-65</option>
                            <option value="66-75">66-75</option>
                            <option value="76-85">76-85</option>
                            <option value="86+">86+</option>
                        </select>
                    </div>
                    <a href="../home.php">
                        <button type="button" class="btn btn-primary btn-lg float-left">Terug</button>
                    </a>
                    <button type="submit" name="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Verder
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
