<?php

namespace PooMvc\Model;

use PooMvc\Core\Model;



class Classe extends Model
{
    //fonctions navigationnelles
    //ManyToOne avec Professeur
    private string $libelle;
    private int $effectif;

    public function __construct()
    {
        self::$table = 'classe';
    }

    public function professeurs(): array|null
    {
        $sql = "se...";
        return parent::findById($sql, [$this->id]);
    }
    
    public static function findAll(): array
    {

        $db = parent::database();
        $db->connexionDb();
        
        $sql = "select * from " . parent::table() ;
        $result = $db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    }
    public function insert(): int
    {
        $db = parent::database();
        $db->connexionDb();
        $sql = "INSERT INTO ".self::table()." (`libelle`,`effectif`) VALUES (?,?)";
        $result = $db->executeUpdate($sql,[$this->libelle,$this->effectif]);
        $db->closeConnexion();

        return $result;
    }


    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of effectif
     */ 
    public function getEffectif()
    {
        return $this->effectif;
    }

    /**
     * Set the value of effectif
     *
     * @return  self
     */ 
    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;

        return $this;
    }
}
