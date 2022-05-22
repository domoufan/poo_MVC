<?php

namespace PooMvc\Model;
use PooMvc\Core\Model;

// classe concrete : c une classe qui peut produire des objets contrairement au classe abstraite : une classe qui ne produit pas d'objet(non instanciable)
// une classe concrete ne contient que des methodes concretes
// Classe final : une classe qui ne peut pas avoir de classe fille(ne peut pé )

abstract class Personne extends Model
{
    // Attributs d'instances

    protected int $id;
    protected string $nomComplet;
    protected static string $role;

    //Attributs de classes ou static

    protected static int $nbrePersonne;
    // methode abstraite 

    // Constructeur par defaut

    public function __construct()
    {
        parent::$table='personne';
    }
    public static function role(): string
    {
        $role = get_called_class();
        $role = str_replace("PooMvc\\Model\\", "", $role);
        $role = strtoupper($role);

        return $role;
    }

    // Getters et Setters
    public function getId(): int
    {
        return $this->id;
    }
    public function getNomComplet(): string
    {
        return $this->nomComplet;
    }
    public static function getNbrePersonne():int
    {
        return self::$nbrePersonne;
    }
    

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    public function setNomComplet(string $nomComplet):self
    {
        $this->nomComplet = $nomComplet;
        return $this;
    }

    public static function setNbrePersonne(int $nbrePersonne):void
    {
        self::$nbrePersonne=$nbrePersonne;
    }


    //Redifinition

    public static function findAll(): array
    {
        $sql = "select * from " .  parent::table();
        echo $sql;
        return [];
    }

}