<?php

class Login
{
    /**
     * Erzeugt ein User-Objekt mit verschiedenen Eigenschaften und gibt es zurück
     * @param string $serializedUser
     */
    public static function fromSessionString(string $serializedUser): self
    {
        $data = unserialize($serializedUser);

        $user = new self();
        foreach ($data as $key => $value) {
            $user->$key = $value;
        }

        return $user;
    }

    /**
     * @var int
     */
    public $userid;

    /**
     * Macht einen Array aus dem Inhalt der Usertabelle und returned diesen
     * @return array
     */
    public function getUsersList()
    {
        $DB = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        $result = $DB->query('SELECT * FROM user');

        $userList = [];
        if ($result->num_rows > 0) {
            while ($obj = $result->fetch_object(get_class($this))) {
                $userList[$obj->userid] = $obj;
            }
        }

        return $userList;
    }
}