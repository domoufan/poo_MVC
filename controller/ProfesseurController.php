<?php

namespace PooMvc\Controller;

use PooMvc\Core\Controller;
use PooMvc\Model\Professeur;


class ProfesseurController extends Controller
{

/*     public function affecterClasse()
    {
    } */

    public function lister()
    {
        $profs = Professeur::findAll();

        $data = [
            "Titres" => "Lister professeurs",
            "Profs" => $profs
        ];

        if ($this->request->isGet() OR $this->request->isPost()) {
            $this->render('professeur/liste.html.php', $data);
        }

    }
    public function inserer()
    {
        if ($this->request->isGet()) {
            $this->render('professeur/insert.html.php');
        }
        if ($this->request->isPost()) {
            /* $this->render('professeur/insert.html.php'); */
            $nprof = new Professeur;
            $nprof->setNomComplet($_POST['nom_complet']);
            $nprof->setGrade($_POST['grade']);
            $nprof->insert();
            $this->redirectToRoute("l_professeur");
        }
    }
}
