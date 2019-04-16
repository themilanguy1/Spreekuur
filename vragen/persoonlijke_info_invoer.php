<?php
require_once('../classes/Autoloader.php');
Session::start();

if (isset($_POST['email'], $_POST['sex'], $_POST['age_range'])) {
    $question_personal_data = new QuestionUser(
        $_POST['email'], $_POST['sex'], $_POST['age_range'], $_POST['name'], $_POST['phone_number'],
        $_POST['medication'], $_POST['health_issues'], $_POST['extra_info']
    );
    $question_personal_data->setQuestionPersonalData();
	// TODO when stelsel_keuze.php is working, redirect to stelsel_keuze.php again
    header('Location: vraag_stellen.php');
}
?>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
    <title>Persoonlijke informatie invoer</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card rounded-0">
                <div class="card-header">
                    <h4 class="mb-0">Voordat u uw vraag stelt, zouden wij nog iets meer informatie willen hebben.</h4>
                    <p>Wij gebruiken deze informatie alleen maar om u beter te kunnen helpen.</p>
                    <p>Er wordt niks van uw gegevens opgeslagen tenzij u dat wilt voor toekomstige vragen.</p>
                </div>
                <div class="card-body bg-light">
                    <form class="form" method="POST">
                        <h5>Verplichte velden *</h5>
                        <div class="form-group">
                            <label for="email">E-mail (waar we ons antwoord naar toe zullen sturen)*</label>
                            <input type="email" class="form-control form-control-md rounded-0" name="email" id="email"
                                   placeholder="Voorbeeld@email.com" required>
                            <br>
                            <label>Geslacht * </label>
                            <input type="radio" name="sex" value="M" checked required> Man
                            <input type="radio" name="sex" value="V"> Vrouw
                            <br>
                            <label>Leeftijdsgroep *</label>
                            <select name="age_range" required>
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
                            <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Verder
                            </button>
                        </div>

                        <br>
                        <br>
                        <br>
                        <h5>Optionele Velden </h5>
                        <p></p>
                        <div class="form-group">
                            <label>Voor en Achternaam</label>
                            <input type="text" class="form-control form-control-md rounded-0" name="name"
                                   placeholder="Kees Janssen">
                            <label>Telefoon Nummer (een andere manier om met u contact op te nemen.</label>
                            <input type="text" class="form-control form-control-md rounded-0" name="phone_number"
                                   placeholder="0612345678">
                            <label>Medicatie</label>
                            <textarea class="form-control form-control-md rounded-0" name="medication"
                                      placeholder="Bloedverdunnerde medicatie, etc."></textarea>
                            <label>Gezondheidsklachten</label>
                            <textarea class="form-control form-control-md rounded-0"
                                      name="health_issues"
                                      placeholder="Asthma, Kortademigheid"></textarea>
                            <label>Aanvullende informatie</label>
                            <textarea class="form-control form-control-md rounded-0"
                                      name="extra_info"
                                      placeholder="allergie/roken/drinken"></textarea>
                        </div>
                        <a href="../home.php">
                            <button type="button" class="btn btn-primary btn-lg float-left">Terug</button>
                        </a>
                        <button type="submit" name="submit" class="btn btn-success btn-lg float-right" id="btnLogin">
                            Verder
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
