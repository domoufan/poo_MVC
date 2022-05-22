<?php

namespace PooMvc\Controller;

use PooMvc\Core\Controller;
use PooMvc\Model\Etudiant;

class EtudiantController extends Controller
{


    public function lister()
    {
        $etudiant = Etudiant::findAll();
       
        $data = [
            "Titres" => "Lister Etudiant",
            "Etudiant" => $etudiant
        ];

        if ($this->request->isGet()) {
            $this->render('etudiant/liste.html.php', $data);
        }
    }
    public function inserer()
    {
        if ($this->request->isGet()) {
            $this->render('etudiant/insert.html.php');
        }
        if ($this->request->isPost()) {

            $add = new Etudiant;
            $add->setNomComplet($_POST['nom_complet']);
            $add->setLogin($_POST['login']);
            $add->setPassword($_POST['password']);
            $add->setMatricule($_POST['matricule']);
            $add->setSexe($_POST['sexe']);
            $add->setAdresse($_POST['adresse']);
            $add->insert();
            $this->redirectToRoute("l_etudiant");
        }
    }
}
