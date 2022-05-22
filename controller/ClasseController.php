<?php

namespace PooMvc\Controller;

use PooMvc\Core\Controller;
use PooMvc\Model\Classe;

class ClasseController extends Controller
{


    public function lister()
    {
        $classe = Classe::findAll();

        $data = [
            "Titres" => "Lister classes",
            "Classe" => $classe
        ];

        if ($this->request->isGet()) {
            $this->render('classe/liste.html.php', $data);
        }
    }
    public function inserer()
    {
        if ($this->request->isGet()) {
            $this->render('classe/insert.html.php');
        }
        if ($this->request->isPost()) {
            $add = new Classe;
            $add->setLibelle($_POST['libelle']);
            $add->setEffectif($_POST['effectif']);
            $add->insert(); 
            $this->redirectToRoute("l_classe");
        }
    }

}