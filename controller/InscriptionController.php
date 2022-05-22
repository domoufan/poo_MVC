<?php

namespace PooMvc\Controller;

use PooMvc\Core\Controller;
use PooMvc\Model\Inscription;

class InscriptionController extends Controller
{


    public function lister()
    {
        $inscription = Inscription::findAll();

        $data = [
            "Titres" => "Lister Inscriptions",
            "inscription" => $inscription
        ];

        if ($this->request->isGet()) {
            $this->render('inscription/liste.html.php', $data);
        }
    }
    public function inserer()
    {
        if ($this->request->isGet()) {
            $this->render('inscription/insert.html.php');
        }
        if ($this->request->isPost()) {
            $add = new Inscription;
            $add->setLibelle($_POST['libelle']);
            $add->insert();
            $this->redirectToRoute("l_inscription");
        }
    }
}
