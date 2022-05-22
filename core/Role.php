<?php

namespace PooMvc\Core;

class Role{

    private Session $session;

    public function __construct(Session $session)
    {
        $this->session->$session;
    }

    public static function isConnect()
    {
    }
    public static function isRp()
    {
    }
    public static function isAc()
    {
    }
    public static function isEtudiant()
    {
    }
}