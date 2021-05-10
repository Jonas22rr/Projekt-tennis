<?php
define('DB_HOST', "localhost");
define('DB_USER', 'connection');
define('DB_PASSWORD', 'Lolo28022004');
define('DB_NAME', 'gastspieler_anmeldung');

class DB extends mysqli
{

}

$DB = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$DB)
{
    die(' Please Check Your Connection'.mysqli_error($DB));
}


function e($str)
{
    return htmlentities($str, ENT_QUOTES, "UTF-8");
}