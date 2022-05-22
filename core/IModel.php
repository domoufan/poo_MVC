<?php

namespace PooMvc\Core;

interface IModel
{
    // Abstraites

    // instances
    public function insert(): int; //Quoi
    public function update(): int;

    //static
    public static function delete(int $id): int;
    public static function findById(int $id): object|null;
    public static function findAll(): array;
    public  static function findBy(string $sql, array $data = null, $single = false): object|null|array;
}

// Methodes Static => classe
/* 
    classe::methode()
*/

// Methodes Instances => objet 
//etat de objet => valeurs de ses attributs
/* 
    $obj=new classe()
    $obj->methode()
*/
