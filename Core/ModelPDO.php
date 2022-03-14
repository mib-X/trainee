<?php


namespace Core;


class ModelPDO
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = PDOConnection::getConnection();
    }

    public function getItemById($table, $id)
    {
        if($id){
            $item = $this->pdo->prepare("SELECT * FROM $table WHERE id=:id");
            $item->execute(['id'=>$id]);
            return $item->fetch(PDO::FETCH_ASSOC);
        }
    }
}