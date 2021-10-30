<?php

require_once '../Models/db.php';
require_once '../Models/login.php';
session_start();
if (!empty($_POST['username']) and !empty($_POST['password'])) {
    $query = "SELECT * FROM `user` WHERE username='" . mysqli_real_escape_string($DB, $_POST['username']) . "' AND passwort ='" . mysqli_real_escape_string($DB, $_POST['password']) . "'";
    $result = mysqli_query($DB, $query);
    $userDataArray = mysqli_fetch_assoc($result);



    if ($userDataArray == true) {
        $_SESSION['user'] = serialize($userDataArray);

        header("location:DB-anzeige.php");
        exit();
    } else {
        //  $message = 'Die Kombination aus Benutzername und Passwort ist falsch.';
        header("location:login.php?error=2");
        exit();
    }
} else {
    // $message = 'Bitte füllen Sie die leeren Felder aus';
    header("location:login.php?error=1");
    exit();
}