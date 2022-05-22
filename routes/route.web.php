<?php

use PooMvc\Core\Router;
use PooMvc\Controller\ClasseController;
use PooMvc\Controller\AcController;
use PooMvc\Controller\ProfesseurController;
use PooMvc\Controller\EtudiantController;
use PooMvc\Controller\ModuleController;
use PooMvc\Controller\InscriptionController;
use PooMvc\Controller\DemandeController;
use PooMvc\Controller\RpController;
use PooMvc\Controller\PersonneController;
use PooMvc\Controller\AnneeScolaireController;
use PooMvc\Controller\SecurityController;
use PooMvc\Exception\RouteNotFound;


$router = new Router();
$router->route('login',[SecurityController::class,"authentification"]);
$router->route('logout', [SecurityController::class, "deconnexion"]);


$router->route('i_professeur', [ProfesseurController::class, "inserer"]);
$router->route('i_etudiant', [EtudiantController::class, "inserer"]);
$router->route('i_ac', [AcController::class, "inserer"]);
$router->route('i_rp', [RpController::class, "inserer"]);
$router->route('i_annee_scolaire', [AnneeScolaireController::class, "inserer"]);
$router->route('i_classe', [ClasseController::class, "inserer"]);
$router->route('i_module', [ModuleController::class, "inserer"]);
$router->route('i_inscription', [InscriptionController::class, "inserer"]);
$router->route('i_demande', [DemandeController::class, "inserer"]);

/* $router->route('i_personne', [PersonneController::class, "inserer"]); */


$router->route('l_professeur', [ProfesseurController::class, "lister"]);
$router->route('l_ac', [AcController::class, "lister"]);
$router->route('l_rp', [RpController::class, "lister"]);
$router->route('l_etudiant', [EtudiantController::class, "lister"]);
$router->route('l_annee_scolaire', [AnneeScolaireController::class, "lister"]);
$router->route('l_classe',[ClasseController::class,"lister"]);
$router->route('l_module', [ModuleController::class, "lister"]);
$router->route('l_inscription', [InscriptionController::class, "lister"]);
$router->route('l_demande', [DemandeController::class, "lister"]);

/* $router->route('l_personne', [PersonneController::class, "lister"]); */




try
{
//essaie de ressoudre la route
$router->resolve();
}
catch (RouteNotFound $ex)
{
//capture l'erreur;
echo $ex->message;
}

