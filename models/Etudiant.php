<?php

namespace PooMvc\Model;

class Etudiant extends User
{
    protected string $matricule;
    protected string $sexe;
    protected string $adresse;
    
    public function __construct()
    {
        parent::$role = "ROLE_ETUDIANT";
    }

    // GETTERS ET SETTERS 
    public function getMatricule()
    {
        return $this->matricule;
    }
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
    public function getSexe()
    {
        return $this->sexe;
    }
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

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
        $sql = "select `nom_complet`,`login`,`id`,`matricule`,`sexe`,`adresse`,`role` from personne where role like 'ROLE_ETUDIANT' ";
        $result = $db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    }
    public function insert(): int
    {
        $db = parent::database();
        $db->connexionDb();
        // requete non preparer : la variable est injecter lors de l'ecriture de la requete
        $sql = "INSERT INTO `personne` (`nom_complet`,`login`,`password`,`matricule`,`sexe`,`adresse`,`role`) VALUES(?,?,?,?,?,?,?)";
        $result = $db->executeUpdate($sql, [$this->nomComplet, $this->login, $this->password, $this->matricule, $this->sexe, $this->adresse,parent::$role]);
        $db->closeConnexion();

        return $result;
    }
}
