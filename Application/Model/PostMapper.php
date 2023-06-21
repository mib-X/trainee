<?php

namespace Application\Model;

class PostMapper extends Mapper
{
    private \PDOStatement $selectStmt;
    private \PDOStatement $updateStmt;
    private \PDOStatement $insertStmt;

    public function __construct(\PDO $pdo)
    {
        parent::__construct($pdo);
        $this->selectStmt = $this->pdo->prepare("SELECT * FROM posts WHERE id = :id");
        $this->updateStmt = $this->pdo->prepare("UPDATE posts SET title = ?,
                 author = ?,
                 date_added = ?,
                 description = ?,
                 thumb = ?   
                WHERE id = ?");
        $this->insertStmt = $this->pdo->prepare("INSERT INTO posts (id, title, author, date_added, description, thumb) 
                            VALUES (null, ?, ?, ?, ?, ?)");
    }

    protected function doCreateObj(array $row): Post
    {
        $post = new Post(
            $row['id'],
            $row['title'],
            $row['author'],
            $row['date_added'],
            $row['description'],
            $row['thumb']
        );
        return $post;
    }

    protected function selectStmt(): \PDOStatement
    {
        return $this->selectStmt;
    }

    public function insert(DomainObject $obj): void
    {
        $values = [$obj->getTitle(),
        $obj->getAuthor(),
        $obj->getDateAdded(),
        $obj->getDescription(),
        $obj->getThumb()];
        $this->insertStmt->execute($values);
        $obj->setId((int)$this->pdo->lastInsertId());
    }

    public function update(DomainObject $obj): void
    {
        $values = [
            $obj->getTitle(),
            $obj->getAuthor(),
            $obj->getDateAdded(),
            $obj->getDescription(),
            $obj->getThumb(),
            $obj->getId()
        ];
        $this->updateStmt->execute($values);
    }

    public function getPosts($limit)
    {
        $query = "SELECT * FROM posts LIMIT $limit";
        $selectAllStmt = $this->pdo->query($query);
        $rows = $selectAllStmt->fetchAll(\PDO::FETCH_ASSOC);
        if (! is_array($rows)) {
            return null;
        }
        $collection = [];
        foreach ($rows as $row) {
            $collection[] = $this->createObj($row);
        }
        return $collection;
    }
}
