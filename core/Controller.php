<?php

namespace PooMvc\Core;

class Controller {
    protected Request $request;
    //injection de la request dans le controller
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function render(string $path, array $data = [])
    {
        $data["Constante"]=Constante::class;
        $data["request"] = $this->request;
        //Dans une vue $Constante::
        //Dans une vue $request::
        ob_start(); 
        extract($data);
        require_once(Constante::ROOT() . "templates/" . $path);
        $content_for_views = ob_get_clean();
        require_once(Constante::ROOT() . "templates/layout/base.html.php");
    }

    public function redirectToRoute($uri)
    {
        header("location:".Constante::WEB_ROOT.$uri);
    }
}