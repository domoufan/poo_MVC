<?php

namespace PooMvc\Model;

class User extends Personne{

    protected string $login;
    protected string $password;

    public function affiche(){
        echo $this->id;
    }
    public function __construct()
    {
        parent::$table = 'user';
    }
   
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        self::$role = $role;

        return self::$role;
    }
 
    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    public static function findUserByLoginPassword(string $login,string $password):object|null{
      return  parent::findBy("select * from personne where login=? and password=?",[$login,$password],true); 
    }
    //Redifinition

/*     public static function findAll(): array
    {
        $db = parent::database();
        $db->connexionDb();
        $sql = "select * from " .  parent::table() . " where role not like 'ROLE_AC' ";
        $result=$db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    } */

}
