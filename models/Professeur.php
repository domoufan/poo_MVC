<?php

namespace PooMvc\Model;

class Professeur extends Personne
{
    //fonctions navigationnelles
    //ManyToMany avec Classe
    private string $grade;
    public function __construct()
    {
        parent::$role = "ROLE_PROFESSEUR";
    }

    public function classes(): array
    {
        return [];
    }
    /*         public function modules(): array
        {
            return [];
        }
        public function rp():Rp{

            return new Rp();
        } */
    public static function findAll(): array
    {
        $db = parent::database();
        $db->connexionDb();
        $sql = "select id,`nom_complet`,`role`,`grade` from " .  parent::table() . " where role like 'ROLE_PROFESSEUR' ";
        $result=$db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    }
    public function insert(): int
    {
        $db = parent::database();
        $db->connexionDb();
        // requete non preparer : la variable est injecter lors de l'ecriture de la requete
        $sql = "INSERT INTO `personne`(`nom_complet`,`role`,`grade`) VALUES(?,?,?)";
        $result = $db->executeUpdate($sql, [$this->nomComplet, parent::$role, $this->grade]);
        $db->closeConnexion();
        /* echo $sql; */
        return $result;
    }

    /**
     * Get the value of grade
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}
