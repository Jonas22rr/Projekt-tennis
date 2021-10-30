<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.0.0-beta.58/dist/themes/light.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.0.0-beta.58/dist/shoelace.js">
    </script>
    <title>Gastspieler-Anmeldung</title>

    <?php
    session_start();
    require_once '../Models/db.php';

    require_once '../Models/anmeldung.php';

    require_once '../Models/login.php';
    ?>
    <style>
    body,
    html {
        background-color: #34495e;
    }

    table.darkTable {
        font-family: "Arial Black", Gadget, sans-serif;
        border: 2px solid #000000;
        background-color: #4A4A4A;
        width: 100%;
        height: 200px;
        text-align: center;
        border-collapse: collapse;
    }

    table.darkTable td,
    table.darkTable th {
        border: 0px solid #4A4A4A;
        padding: 3px 2px;
    }

    table.darkTable tbody td {
        font-size: 14px;
        color: #E6E6E6;
    }

    table.darkTable tr:nth-child(even) {
        background: #888888;
    }

    table.darkTable thead {
        background: #000000;
        border-bottom: 3px solid #000000;
    }

    table.darkTable thead th {
        font-size: 20px;
        font-weight: bold;
        color: #E6E6E6;
        text-align: center;
        border-left: 2px solid #4A4A4A;
    }

    table.darkTable thead th:first-child {
        border-left: none;
    }

    table.darkTable tfoot {
        font-size: 12px;
        font-weight: bold;
        color: #E6E6E6;
        background: #000000;
        background: -moz-linear-gradient(top, #404040 0%, #191919 66%, #000000 100%);
        background: -webkit-linear-gradient(top, #404040 0%, #191919 66%, #000000 100%);
        background: linear-gradient(to bottom, #404040 0%, #191919 66%, #000000 100%);
        border-top: 1px solid #4A4A4A;
    }

    table.darkTable tfoot td {
        font-size: 12px;
    }

    h1 {
        margin: auto;
        padding-top: 20px;
        padding-bottom: 35px;
        text-align: center;
        font-family: Arial;
        color: #fff;
    }

    .btnDiv {
        float: right;
        padding: 10px 20px;
    }
    </style>
</head>

<body>
    <?php
    if ($_SESSION['user'] == null) {
        header("location:login.php");
    }

    // $user = login::fromSessionString($_SESSION['user']);
    if ($_SESSION['user'] != null) {


        $AnmeldungClass = new Anmeldung();
        $anmeldungData = $AnmeldungClass->getAnmeldungen();

        if (isset($_GET['logout'])) {
            session_destroy();
            header("location:login.php");
            exit();
        }


    ?>
    <div>
        <div class="btnDiv">
            <sl-button href="DB-Anzeige.php?logout" type="danger">Logout</sl-button>
        </div>


        <div>
            <table class="darkTable">

                <h1>Gast-Anmeldung</h1>
                <thead>
                    <tr>
                        <th>Spieler</th>
                        <th>Vor/Nachname</th>
                        <th>Email</th>
                        <th>Spieltag</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        //  je ein Datensatz
                        foreach ($anmeldungData as $anmeldung) {


                            //Umwandlung in deutsches Datums Format
                            //    $eingang = new DateTime($anfrage->eingang);
                            //    $bearbeitungsende = new DateTime($anfrage->bearbeitungsende);
                        ?>
                    <tr>
                        <td>Mitglied: <br>Gast:</td>
                        <td><?php echo $anmeldung->vorname, " ", $anmeldung->nachname; ?><br><?php echo $anmeldung->g_vorname, " ", $anmeldung->g_nachname; ?>
                        </td>
                        <td><?php echo $anmeldung->email ?><br><?php echo $anmeldung->g_email ?></td>
                        <td><?php echo $anmeldung->datum ?></td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>



    <!--            <tr>-->
    <!--                <form action="anfragen-verwalten.php" method="POST">-->
    <!--                    <td>--><?php //echo $anfrage->anfrgeid;
                                        ?>
    <!--</td>-->
    <!--                    <td>--><?php //echo $anfrage->name;
                                        ?>
    <!--</td>-->
    <!--                    <td>--><?php //echo $anfrage->vorname;
                                        ?>
    <!--</td>-->
    <!--                    <td>--><?php //echo $eingang->format('d.m.Y');
                                        ?>
    <!--</td>-->
    <!--                    <td>--><?php //echo $anfrage->bearbeitungsende != "0000-00-00"? $bearbeitungsende->format('d.m.Y') : 'Anfrage ist noch nicht geschlossen'; 
                                        ?>
    <!--</td>-->
    <!--                    <td>--><?php //echo !empty($dateDifference)? $dateDifference->days ." Tage": 'Bisher keine Bearbeitung Erfolgt'; 
                                        ?>
    <!--</td>-->
    <!--                    <td>--><?php //echo $anfrage->bearbeiter != ""? $anfrage->bearbeiter: 'Keiner Zugewiesen'; 
                                        ?>
    <!--</td>-->
    <!--                    <td><input type="checkbox" --><?php //echo $checked;
                                                                ?>
    <!--  class="form-check-input" name="anfrgeid" value="--><?php //echo $anfrage->anfrgeid; 
                                                                    ?>
    <!--"></td>-->
    <!--                </form>-->
    <!--            </tr>-->
    <!--        --><?php //} 
                        ?>

    </table>

</body>

</html>
<?php } ?>