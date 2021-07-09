<?php


class Anmeldung
{

    /**
     * trägt die daten ins DB-system ein
     * Spieler und Gast in die jeweilige Tabelle
     * Tabelle connection sorgt für die Verbindung
     * @param $userIdtoDelete
     * @return bool
     */
    public static function neueAnmeldung(array $post): bool
    {

        $VornameMitglied = $post["VornameMitglied"];
        $NachnameMitglied = $post["NachnameMitglied"];
        $emailMitglied = $post["EmailMitglied"];
        $datum = $post["Spieltag"];
        $DB = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

       $result2 = $DB->query("INSERT INTO anmeldungen (`vorname`, `nachname`, `email`, `datum`) 
                        VALUES ('$VornameMitglied', '$NachnameMitglied', '$emailMitglied', '$datum' )");
        $last_anmeldungen = $DB->insert_id;
        if (!$result2) {
            return false;
        }

        $success = true;
        $VornameGastspieler = $post["VornameGastspieler"];
        $NachnameGastspieler = $post["NachnameGastspieler"];
        $EmailGastspieler = $post["EmailGastspieler"];
            $result3 = $DB->query("INSERT INTO gaeste (`g_vorname`, `g_nachname`, `g_email`) 
                            VALUES ('$VornameGastspieler', '$NachnameGastspieler', '$EmailGastspieler')");
            if (!$result3) {
                $success = false;
            }else {


                $last_gaeste = $DB->insert_id;

                $success = $DB->query("INSERT INTO connection ( `spielerid`, `gaesteid`) 
                            VALUES ('$last_anmeldungen', '$last_gaeste')");
            }
        return $success;
    }

    /**
     * Liest alle Anmeldungen aus der Datenbank aus
     * @return array
     */
    public function getAnmeldungen()
    {
        $DB = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $result = $DB->query('SELECT * FROM anmeldungen  ORDER BY datum ASC');

        $anmeldungen = [];
        if ($result->num_rows > 0) {
            while ($obj = $result->fetch_object(get_class($this))) {
                $anmeldungen[$obj->spielerid] = $obj;
            }
        }
        return $anmeldungen;
    }
    /**
     * Liest alle Gäste aus der Datenbank aus
     * @return array
     */
    public function getGuests()
    {
        $DB = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $result = $DB->query('SELECT * FROM gaeste');
        $gaeste = [];
        if ($result->num_rows > 0) {
            while ($obj = $result->fetch_object(get_class($this))) {
                $gaeste[$obj->gaesteid] = $obj;
            }
        }
        return $gaeste;
    }

    /**
     *Schreibt alle Muskelgruppen zu dem passenden Gerät in ein Array
     * @return inventar[]
     * @param int $spielerid
     */
    public function getConnection($spielerid)
    {
        $DB = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $query = "SELECT * FROM `gaeste` WHERE EXISTS (SELECT 1 FROM connection WHERE connection.gaesteid = gaeste.gaesteid AND connection.spielerid = '$spielerid') ";
        $result = mysqli_query($DB, $query);
        $getConnection = [];
        if ($result->num_rows > 0) {
            while($obj = $result->fetch_object(get_class($this))) {
                $getConnection[$obj->gaesteid] = $obj;
            }
        }
        return $getConnection;
    }

}