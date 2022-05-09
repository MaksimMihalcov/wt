<?php

class DBProvider
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=maindb', 'root');
    }

    public function insert($a)
    {
        $insert = $this->pdo->prepare('INSERT INTO article (name, recipe, author_name) VALUES (:title, :recipe, :author_name)');
        $insert->bindParam(':title', $a->name);
        $insert->bindParam(':recipe', $a->recipe);
        $insert->bindParam(':author_name', $a->author_name);
        $insert->execute();
    }

    public function getAll()
    {
        return $this->pdo->query('SELECT * FROM article');
    }

    public function delete($id)
    {
        $data = $this->pdo->prepare('DELETE FROM article WHERE id = :id');
        $data->bindParam(':id', $id);
        $data->execute();
    }
}