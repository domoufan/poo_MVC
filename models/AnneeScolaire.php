<?php

namespace PooMvc\Model;
use PooMvc\Core\Model;


class AnneeScolaire extends Model{

    private string $libelle;
    private int $etat;
    private int $id;


    //Fonctions navigationnells
    public function __construct()
    {
        self::$table = 'annee_scolaire';
    }

    //OneToManys
    public function inscriptions(): array
    {
        return [];
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
        // requete non preparer : la variable est injecter lors de l'ecriture de la requete
        $sql = "INSERT INTO ".self::$table. " (`libelle`,`etat`) VALUES(?,?)";
        $result = $db->executeUpdate($sql, [$this->libelle, $this->etat]);
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
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }
}