<?php

namespace Application\Model;

abstract class Mapper
{
    protected \PDO $pdo;
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function getById($id): ?DomainObject
    {
        $this->selectStmt()->execute(['id' => $id]);
        $row = $this->selectStmt()->fetch(\PDO::FETCH_ASSOC);
        if (! is_array($row)) {
            return null;
        }
        if (! isset($row['id'])) {
            return null;
        }
        return $this->createObj($row);
    }
    public function createObj(array $row): DomainObject
    {
        $obj = $this->doCreateObj($row);
        return $obj;
    }
    abstract protected function doCreateObj(array $row): DomainObject;
    abstract protected function selectStmt(): \PDOStatement;
    abstract public function insert(DomainObject $obj): void;
    abstract public function update(DomainObject $obj): void;
    //abstract function delete(DomainObject $object): void;
}
