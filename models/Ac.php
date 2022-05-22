<?php
namespace PooMvc\Model;
class Ac extends User
{
    // Attributs navigationnels => attributs issus des associations
    //oneToMany avec Inscriptions
    //1er approche

    private array $inscriptions;

    //2em approche
    // Attributs navigationnels => attributs issus des associations


    public function inscriptions():array
    {
        return [];
    }
    
    public function __construct()
    {
        parent::$role = "ROLE_AC";
        $this->inscriptions = [];
    }

    public static function findAll(): array
    {
        $db = parent::database();
        $db->connexionDb();
        $sql = "select id,`nom_complet`,`role`,login,password from " .  parent::table() . " where role like 'ROLE_AC' ";
        $result = $db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    }
    public function insert(): int
    {
        $db = parent::database();
        $db->connexionDb();
        // requete non preparer : la variable est injecter lors de l'ecriture de la requete
        $sql = "INSERT INTO `personne` (`nom_complet`,`role`,`login`,`password`) VALUES(?,?,?,?)";
        $result = $db->executeUpdate($sql, [$this->nomComplet, parent::$role, $this->login, $this->password]);
        $db->closeConnexion();
       
        return $result;
    }
}
