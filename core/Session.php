<?php
namespace PooMvc\Core;

use PooMvc\Model\User;

class Session{

    private User $user;
    
    public function __construct()
    {
        if (session_status()==PHP_SESSION_NONE) {
            session_start();
        }
    }

    //Ajouter une donner dans la session
    public function set(string $key, $data)
    {

        $_SESSION[$key] = $data;
    }
    public function get(string $key)
    {

        return $_SESSION[$key];
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public static function is_connect(){
        return $_SESSION['user-connect'];
    }
}