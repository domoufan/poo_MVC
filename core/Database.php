<?php

namespace PooMvc\Core;

class Database
{
    private \PDO|null $pdo = null;

    public function connexionDb(): void
    {
        $this->pdo = new \PDO("mysql:dbname=Poo_mvc;host=localhost:8000;", "root", ""); //A CONTINUER...
    }
    public function closeConnexion()
    {
        $this->pdo = null;
    }
    public function executeSelect(string $sql, array $data = [], bool $single = false): object|array|null
    {
        
        $query = $this->pdo->prepare($sql);
       /*  dd($query); */
        $query->execute($data);

                if ($single) {
                    $result = $query->fetch(\PDO::FETCH_OBJ);
                    if($query->rowCount()==0) return null;
                } else {
                    $result = $query->fetchAll(\PDO::FETCH_OBJ);
                }
                
        return $result;
    }
    public function executeUpdate(string $sql, array $data = []): int
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($data);
        $count = $query->rowCount();
        // pour une requete insert , on doit retourner le dernier id generer
        return $count;
    }
}
