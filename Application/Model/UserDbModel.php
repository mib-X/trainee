<?php


namespace Application\Model;

use \Core\ModelPDO as ModelPDO;

class UserDbModel extends ModelPDO
{
    public function getUserById($id): ?array
    {
        try {
            $item = $this->pdo->prepare('SELECT id, name, email, image, date_reg, birthday FROM users WHERE id=:id');
            $item->execute(['id'=>$id]);
            return $item->fetch(\PDO::FETCH_ASSOC);
        } catch (\PDOException $exception) {
            echo "Ошибка выполнения запроса" . $exception->getMessage();
        }
    }
}
