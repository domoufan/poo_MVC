<?php

namespace PooMvc\Controller;

use PooMvc\Core\Controller;
use PooMvc\Model\Module;


class ModuleController extends Controller
{

    public function lister()
    {
        $module = Module::findAll();

        $data = [
            "titre " => "liste des inscriptions",
            "Module" => $module
        ];

        if ($this->request->isGet()) {
            $this->render("module/liste.html.php", $data);
        }
    }
    public function inserer()
    {
        if ($this->request->isGet()) {
            $this->render('module/insert.html.php');
        }
        if ($this->request->isPost()) {
            $add = new Module;
            $add->setLibelle($_POST['libelle']);
            $add->insert();
            $this->redirectToRoute("l_module");
        }
    }
}
