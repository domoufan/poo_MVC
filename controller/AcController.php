<?php

namespace PooMvc\Controller;

use PooMvc\Core\Controller;
use PooMvc\Model\Ac;

class AcController extends Controller
{

    public function lister()
    {
        $acs = Ac::findAll();

        $data = [
            "Titres" => "Lister Ac",
            "Acs" => $acs
        ];

        if ($this->request->isGet()) {
            $this->render('ac/liste.html.php', $data);
        }
    }
    public function inserer()
    {
        if ($this->request->isGet()) {
            $this->render('ac/insert.html.php');
        }
        if ($this->request->isPost()) {
            $add = new Ac;
            $add->setNomComplet($_POST['nom_complet']);
            $add->setLogin($_POST['login']);
            $add->setPassword($_POST['password']);
            $add->insert();
            $this->redirectToRoute("l_ac");
        }
    }
}
