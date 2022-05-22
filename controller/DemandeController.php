<?php

namespace PooMvc\Controller;

use PooMvc\Core\Controller;
use PooMvc\Model\Demande;

class DemandeController extends Controller
{


    public function lister()
    {
        $demande = Demande::findAll();

        $data = [
            "Titres" => "Lister annee scolaire",
            "demande" => $demande
        ];

        if ($this->request->isGet()) {
            $this->render('demande/liste.html.php', $data);
        }
    }
    public function inserer()
    {
        if ($this->request->isGet()) {
            $this->render('demande/insert.html.php');
        }
        if ($this->request->isPost()) {
            $add = new Demande;
            $add->setMotif($_POST['motif']);
            $add->setAdresse($_POST['adresse']);
            $add->setLibelle($_POST['libelle']);
            $add->insert();
            $this->redirectToRoute("l_demande");
        }
    }
}
