<?php

namespace PooMvc\Controller;

use PooMvc\Core\Controller;
use PooMvc\Model\Personne;

class PersonneController extends Controller
{
    public function lister(){
        $personne = Personne::findAll();

        $data=[
            "titre"=>"lister les personnes",
            "Personne"=>$personne
        ];
        
        if ($this->request->isGet()) {
            $this->render('personne/liste.html.php');
        }
    }
}
