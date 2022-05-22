<?php

namespace PooMvc\Model;

use PooMvc\Core\Model;

class Module extends Model
{

    private int $id;
    private string $libelle;

    public function __construct()
    {
        self::$table = 'module';
    }
    public function professeurs(): array
    {
        return [];
    }

    // GETTERS AND SETTERS
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getLibelle()
    {
        return $this->libelleModule;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
    public static function findAll(): array
    {
        $db = parent::database();
        $db->connexionDb();
        $sql = "select * from " .  parent::table();
        $result = $db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    }
    public function insert():int
    {
        $db = parent::database();
        $db->connexionDb();
        $sql = "INSERT INTO ".parent::table()." (libelle) VALUES(?)";
        $result = $db->executeUpdate($sql,[$this->libelle]);
        $db->closeConnexion();
        return $result;
    }
}
