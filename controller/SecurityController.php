<?php

namespace PooMvc\Controller;

use PooMvc\Core\Controller;
use PooMvc\Core\Request;

class SecurityController extends Controller
{

    public function authentification()
    {
        // 1.Affichaeg du formulaire de connexion => GET
        if ($this->request->isGet()) {
           $this->render('security/login.html.php');
        }
        // 2.traitement apres soumission => POST
        
    }
    public function deconnexion()
    {
        $this->redirectToRoute("login");

    }
}
