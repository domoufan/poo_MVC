<?php

namespace PooMvc\Controller;

use PooMvc\Core\Controller;
use PooMvc\Model\AnneeScolaire;

class AnneeScolaireController extends Controller
{


    public function lister()
    {
        $an = AnneeScolaire::findAll();

        $data = [
            "Titres" => "Lister annee scolaire",
            "An" => $an
        ];

        if ($this->request->isGet()) {
            $this->render('annee_scolaire/liste.html.php', $data);
        }
    }
    public function inserer()
    {
        if ($this->request->isGet()) {
            $this->render('annee_scolaire/insert.html.php');
        }
        if ($this->request->isPost()) {
            /* dd($_POST); */
            $add = new AnneeScolaire;
            $add->setLibelle($_POST["libelle"]);
            $add->setEtat($_POST["etat"]);
            $add->insert();
            $this->redirectToRoute("l_annee_scolaire");
        }
    }
}
