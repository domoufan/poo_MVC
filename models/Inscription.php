<?php

namespace PooMvc\Model;

use PooMvc\Core\Model;


class Inscription extends Model
{
    // Attributs d'instances
    //Attributs de classes
    // Attributs navigationnels => attributs issus des associations
    private int $id;
    private string $libelle;

    public function __construct()
    {
    }

    // ManyToOne avec Ac
    public function ac(): Ac
    {
        $sql = "select p.* from " . parent::table() . " i,personne p 
                    where p.id=i.ac_id 
                    and p.role like 'ROLE_AC' 
                    and i.id=?";

        return parent::findById($sql, [$this->id]);
    }

    // ManyToOne avec AnneeScolaire
    public function anneeScolaire(): AnneeScolaire
    {
        $sql = "select p.* from annee_scolaire a,inscription i 
                    where a.id=i.annee_id 
                    and i.id=?";
        return parent::findById($sql, [$this->id]);
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
    public function insert(): int
    {
        $db = parent::database();
        $db->connexionDb();
        $sql = "INSERT INTO " . parent::table() . " (libelle) VALUES(?)";
        $result = $db->executeUpdate($sql, [$this->libelle]);
        $db->closeConnexion();
        return $result;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
}
