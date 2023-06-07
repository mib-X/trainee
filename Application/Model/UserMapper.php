<?php


namespace Application\Model;

class UserMapper extends Mapper
{
    /**
     * @var \PDOStatement|false
     */
    private \PDOStatement $selectStmt;
    /**
     * @var \PDOStatement|false
     */
    private \PDOStatement $updateStmt;
    /**
     * @var \PDOStatement|false
     */
    private \PDOStatement $insertStmt;

    /**
     * UserMapper constructor.
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct($pdo);
        $this->selectStmt = $this->pdo->prepare("SELECT * FROM users WHERE id = :id");
        $this->updateStmt = $this->pdo->prepare("UPDATE users SET name = ?, email = ?, image = ?, date_reg = ?, birthday = ? WHERE id = ?");
        $this->insertStmt = $this->pdo->prepare("INSERT INTO users (id, name, email, image, date_reg, birthday) VALUES (null, :name, :email, :image, now(), :birthday)");
    }

    /**
     * @param array $row
     * @return DomainObject
     */
    protected function doCreateObj(array $row): DomainObject
    {
        $user = new User((int)$row['id'],
            (string)$row['name'],
            (string)$row['email'],
            (string)$row['date_reg'],
            (string)$row['birthday'],
            (string)$row['image']
        );
        return $user;
    }

    /**
     * @return \PDOStatement
     */
    protected function selectStmt(): \PDOStatement
    {
        return $this->selectStmt;
    }

    /**
     * @param DomainObject $obj
     */
    public function insert(DomainObject $obj): void
    {
        $values = ['name' => $obj->getName(),
            'email' => $obj->getEmail(),
            'image' => $obj->getImage(),
            'birthday' => $obj->getBirthday()
        ];
        $this->insertStmt->execute($values);
        $obj->setId((int)$this->pdo->lastInsertId());
    }

    /**
     * @param DomainObject $obj
     */
    public function update(DomainObject $obj): void
    {
        $values = [$obj->getName(),
                $obj->getEmail(),
                $obj->getImage(),
                $obj->getRegisterDate(),
                $obj->getBirthday(),
                $obj->getId()
            ];
        $this->updateStmt->execute($values);
    }
}