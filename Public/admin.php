<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet">
    <title>Admin-Dashboard</title>

    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="adminstyle.css" />
    <?php
    require_once '../Models/db.php';

    require_once '../Models/anmeldung.php';
    ?>
</head>

<body>
    <html>
    <h1>Admin Dashboard</h1>

    <table class="roundingborder" id="info">
        <tr>
            <th>Spielername</th>
            <th>Spieler E-Mail</th>
            <th>Spieldatum</th>
            <th>Gastspieler</th>
            <th>Gast E-Mail</th>
        </tr>
        <?php
    $AnmeldungClass = new Anmeldung();
    $SpielerFromDatabase = $AnmeldungClass->getAnmeldungen();
//    $GuestsFromDatabase = $AnmeldungClass->getGuests();
//    echo "<pre>";
//    print_r($SpielerFromDatabase);
//    echo "</pre>";

    ?>
        <?php

    //je ein Datensatz
    foreach ($SpielerFromDatabase as $spiel) {

    //Umwandlung in deutsches Datums Format
      $date = new DateTime($spiel->datum);
      $connection = $AnmeldungClass->getConnection($spiel->spielerid);

        ?>
        <tr>
            <td><?php echo $spiel->vorname," ", $spiel->nachname;?></td>
            <td><?php echo $spiel->email;?></td>
            <td><?php echo $date->format('d.m.Y'); ?></td>
            <?php
            foreach ($connection as $guest) {

            ?>
            <td><?php echo $guest->g_vorname," ", $guest->g_nachname;?></td>
            <td><?php echo $guest->g_email;?></td>
            <?php } ?>
        </tr>
        <?php }     ?>
    </table>

    </html>
</body>