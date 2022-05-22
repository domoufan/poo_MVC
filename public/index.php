<?php
session_start();
// Chargement Automatique => composer
ini_set("display_errors", 1);
ini_set("display_startup_error", 1);
error_reporting(E_ALL);

require_once("../vendor/autoload.php");
/* require_once("../core/Constante.php"); */
require_once("../core/fonctions.php");
require_once("../routes/route.web.php");

