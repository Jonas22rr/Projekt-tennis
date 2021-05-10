<?php


class Anmeldung
{

    /**
     *  trägt die daten ins DB-system ein
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

        if (!$result2) {
            return false;
        }

        $success = true;
        $VornameGastspieler = $post["VornameGastspieler"];
        $NachnameGastspieler = $post["NachnameGastspieler"];
        $EmailGastspieler = $post["EmailGastspieler"];
            $result3 = $DB->query("INSERT INTO gaeste (`vorname`, `nachname`, `email`) 
                            VALUES ('$VornameGastspieler', '$NachnameGastspieler', '$EmailGastspieler')");
            if (!$result3) {
                $success = false;
            }

        return $success;
    }
}