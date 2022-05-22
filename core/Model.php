<?php

namespace PooMvc\Core;

abstract class Model implements IModel
{
    protected static string $table;

    protected static Database|null $database = null;

    protected static function database(): Database
    {
        return new Database();
    }
    public function __construct()
    {
    }
    //Quoi
    public function update(): int
    {
        echo self::$table;
        return 0;
    }
    public static function delete(int $id): int
    {
        $db = self::database();
        $db->connexionDb();
        // requete non preparer : la variable est injecter lors de l'ecriture de la requete
        $sql = "delete from '" . self::table() . "'where id=$id";
        $result = $db->executeUpdate($sql);
        $db->closeConnexion();
        echo $sql;
        return $result;
    }


    public function insert(): int
    {
        return 0;
    }

    public static function findAll(): array
    {
        $db = self::database();
        $db->connexionDb();
        $sql = "select * from '" . self::table() . "'";
        $result = $db->executeSelect($sql);
        $db->closeConnexion();
        echo $sql;
        return $result;
    }
    public static function findById(int $id): object|null
    {
        $db = self::database();
        $db->connexionDb();
        // requete preparer : la variable est injecter lors de l'execution de la requete
        //?=> jocker
        // premier jocker a la position 0 , le deuxieme position 1
        $sql = "select * from '" . self::table() . "'where id=?";
        $result = $db->executeSelect($sql, [$id]);
        $db->closeConnexion();
        echo $sql;
        return $result;
    }
    public static function findBy(string $sql, array $data = null, $single = false): object|null|array
    {
        $db = self::database();
        $db->connexionDb();
        $result = $db->executeSelect($sql, $data, $single);
        $db->closeConnexion();
        return $result;
    }


    public static function table(): string
    {
        $table = get_called_class();
        $table = str_replace("PooMvc\\Model\\", "", $table);

        if ($table == "AnneeScolaire") {
            $table = "annee_scolaire";
        } else {
            $table = ($table == "User" or $table == "Ac" or $table == "Rp" or $table == "Professeur") ? "personne" : strtolower($table);
        }

        return $table;
    }
}
