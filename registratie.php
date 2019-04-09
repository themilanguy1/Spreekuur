<?php
//var_dump($_POST);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
</head>
<body>
<div class="card rounded-0">
    <div class="card-header">
        <h3 class="mb-0">Login</h3>
        <h5 class="mb-0">Hier bevat instrucie hoe moet je inloggen of wat is required en niet.</h5>
    </div>
    <div class="card-body bg-light">
        <form onSubmit="if(!confirm('Let op: Hoe goed wij u kunnen helpen hangt af van hoeveel informatie u ons geeft. ' +
         'Dus als u bijvoorbeeld nog medicatie neemt of bestaande gezondheidsproblemen heeft, zouden wij dit graag willen weten.')){return false;}"
              class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
            <h4>Verplichte velden *</h4>
            <div class="form-group">
                <label for="email">E-mail *</label>
                <input type="email" class="form-control form-control-md rounded-0" name="email" id="email" required
                       placeholder="Voorbeeld@email.com">
                <label>Geslacht * </label>
                <input type="radio" name="geslacht" value="M" required> Man
                <input type="radio" name="geslacht" value="V" required> Vrouw
                <br>
                <label>Leeftijdsgroep *</label>
                <select name="leeftijd">
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

            <br>
            <h4>Optionele Velden </h4>
            <div class="form-group">
                <label>Patientnummer</label>
                <input type="number" class="form-control form-control-md rounded-0" id="patientnummer"
                       name="patientnummer"
                       placeholder="12345678">
                <label>Voornaam</label>
                <input type="text" class="form-control form-control-md rounded-0" id="voornaam" name="voornaam"
                       placeholder="Kees">
                <label>Achternaam</label>
                <input type="text" class="form-control form-control-md rounded-0" id="achternaam" name="achternaam"
                       placeholder="Janssen">
                <label>Telefoon</label>
                <input type="text" class="form-control form-control-md rounded-0" id="telefoon" name="telefoon"
                       placeholder="Type your password.">
                <label>Woonplaats</label>
                <input type="text" class="form-control form-control-md rounded-0" id="woonplaats" name="woonplaats"
                       placeholder="Plaatsnaam">
                <label>Postcode</label>
                <input type="text" class="form-control form-control-md rounded-0" id="postcode" name="poscode"
                       placeholder="3021 XT">
                <label>Adres/huisnummer</label>
                <input type="text" class="form-control form-control-md rounded-0" id="adres" name="adres"
                       placeholder="Straat 21">
                <label>Medicatie</label>
                <textarea class="form-control form-control-md rounded-0" id="medicatie" name="medicatie"
                          placeholder="Bloedverdunners"></textarea>
                <label>Gezondheidsklachten</label>
                <textarea class="form-control form-control-md rounded-0" id="gezondheids_klachten"
                          name="gezondheids_klachten"
                          placeholder="Asthma, Kortademigheid"></textarea>
                <label>Aanvullende informatie</label>
                <textarea class="form-control form-control-md rounded-0" id="aanvullende_informatie"
                          name="aanvullende_informatie"
                          placeholder="allergie/roken/drinken"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Inloggen
            </button>
        </form>
    </div>
</div>
</body>
</html>
