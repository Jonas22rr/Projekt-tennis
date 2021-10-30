<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet">
    <title>Gastspieler-Anmeldung</title>

    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="icon" type="image/png" href="../pictures/favicon.png">

    <?php
    require_once '../Models/db.php';

    require_once '../Models/anmeldung.php';
?>
</head>
<?php
//anmelde-daten werden weggeschrieben
//print_r($_POST);


if(isset($_POST['saveButton'])) {

    if (Anmeldung::neueAnmeldung($_POST)) {
        ?>
<script> alert("Sie haben sich erfolgreich zum Spielen angemeldet") </script>
<?php
    } else {
        ?>
<script>alert("Hoppla, es ist leider ein Fehler aufgetreten")</script>
<?php
    }

}


?>
<body>
<div class="box container">
    <h1 class="head">Gastspieler-Anmeldung</h1>
    <form action="index.php" method="POST">
        <div>
            <label  class="custom-field one">
                <input name="VornameMitglied" oninput="changeBorder()" id="Border" type="text" required />
                <span class="placeholder">Vorname Mitglied</span>
            </label>
            <label  class="custom-field one">
                <input name="NachnameMitglied" oninput="changeBorder()" id="Border" type="text" required />
                <span class="placeholder">Nachname Mitglied</span>
            </label>
            <label id="Name" class="custom-field one">
                <input name="EmailMitglied" type="text" id="email" required />
                <span class="placeholder">Email</span>
            </label>
            <label class="custom-field-data one">
                <input name="Spieltag" type="date" id="date" placeholder="Spieltag:" required>
            </label>
        </div>
        <div>
            <label class="custom-field one">
                <input name="VornameGastspieler" type="text" required />
                <span class="placeholder">Vorname Gastspieler</span>
            </label>
            <label class="custom-field one">
                <input name="NachnameGastspieler" type="text" required />
                <span class="placeholder">Nachname Gastspieler</span>
            </label>
            <label class="custom-field one">
                <input name="EmailGastspieler" type="text" id="email" required />
                <span class="placeholder">Email</span>
            </label>
        </div>
        <div>
            <button name="saveButton" onclick="myFunction(); changeBorder()" id="saveButton" type="submit" style="--content: 'Speichern';">
                <div class="left"></div>
                <span onclick="changeText()" id="changeText">Speichern</span>
                <div class="right"></div>

            </button>

        </div>
    </form>
</div>

</body>

</html>