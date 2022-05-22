<?php

namespace PooMvc\Model;
use PooMvc\Core\Model;


class Demande extends Model
{

    private int $id;
    private string $motif;
    private string $adresse;
    private string $libelle;

    public function __construct()
    {
        self::$table = 'demande';
    }

/*     public function etudiant(): Etudiant
    {

        return new Etudiant();
    }
    public function rp(): Rp
    {

        return new Rp();
    } */



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
    public function getMotif()
    {
        return $this->motif;
    }
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

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
    public function insert(): int
    {
        $db = parent::database();
        $db->connexionDb();
        $sql = "INSERT INTO " . parent::table() . " (libelle,motif,adresse) VALUES(?,?,?)";
        $result = $db->executeUpdate($sql, [$this->libelle,$this->motif,$this->adresse]);
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
}
