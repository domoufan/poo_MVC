<?php

namespace PooMvc\Model;

class RP extends User
{
    public function __construct()
    {
        self::$role = "ROLE_RP";
        self::$table = 'rp';
    }
    public static function findAll(): array
    {
        $db = parent::database();
        $db->connexionDb();
        $sql = "select * from personne where role like 'ROLE_RP' ";
        $result = $db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    }
    public function insert():int
    {
        $db = parent::database();
        $db->connexionDb();
        $sql = "INSERT INTO `personne` (`nom_complet`,`role`,`login`,`password`) VALUES(?,?,?,?)";
        $result = $db->executeUpdate($sql,[$this->nomComplet,self::$role,$this->login,$this->password]);
        $db->closeConnexion();
        return $result;
    }
}
