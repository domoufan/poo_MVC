<?php

namespace PooMvc\Core;

class Constante
{
    public const WEB_ROOT = "http://localhost:8003/";

    public static function ROOT()
    {
        return
            str_replace('public', '', $_SERVER['DOCUMENT_ROOT']);
    }
    public static function VIEWS_PATH()
    {
        return self::ROOT() . "templates" . DIRECTORY_SEPARATOR;
    }
    public static function UPLOADS()
    {
        return self::ROOT() . "public" . DIRECTORY_SEPARATOR . "uploads" . DIRECTORY_SEPARATOR;
    }
    public static function SRC_PATH()
    {
        return self::ROOT() . "src" . DIRECTORY_SEPARATOR;
    }
    public static function WEB_PUBLIC()
    {
        return
            str_replace("index.php", "", $_SERVER['SCRIPT_NAME']);
    }
}
/* define("ROOT", str_replace("public" .    DIRECTORY_SEPARATOR . "index.php", "", $_SERVER['SCRIPT_FILENAME'])); */
/* define("UPLOADS", ROOT . "public" . DIRECTORY_SEPARATOR . "uploads" . DIRECTORY_SEPARATOR); */
/* define("SRC_PATH",   ROOT .  "src" .      DIRECTORY_SEPARATOR); */
/* define("VIEWS_PATH", ROOT .  "templates" . DIRECTORY_SEPARATOR); */
/* define("WEB_PUBLIC", str_replace("index.php", "", $_SERVER['SCRIPT_NAME'])); */
/* define("WEB_ROOT", "http://localhost:8003/"); */

//define("DB_PATH",    ROOT.  "data".     DIRECTORY_SEPARATOR."db.json");
// On ne passe pas par le ROOT parceque ca permet de charger des dossiers
// Il y a des url serveurs qui permettent de charger des fichiers et d'autre de charger des dossiers
