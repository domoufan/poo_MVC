<?php

namespace PooMvc\Controller;

use PooMvc\Core\Controller;
use PooMvc\Model\RP;

class RpController extends Controller
{


    public function lister()
    {
        $rp = RP::findAll();

        $data = [
            "Titres" => "Lister RP",
            "Rp" => $rp
        ];

        if ($this->request->isGet()) {
            $this->render('rp/liste.html.php', $data);
        }
    }
    public function inserer()
    {
        if ($this->request->isGet()) {
            $this->render('rp/insert.html.php');
        }
        if ($this->request->isPost()) {
            $add = new RP;
            $add->setNomComplet($_POST['nom_complet']);
            $add->setLogin($_POST['login']);
            $add->setPassword($_POST['password']);
            $add->insert(); 
            $this->redirectToRoute("l_rp");
        }
    }
}