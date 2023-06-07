<?php


namespace Application\Model;

use \Core\ModelPDO as ModelPDO;

class PostDbModel extends ModelPDO
{
    public function getPostById($id)
    {
        if($id){
            try{
                $item = $this->pdo->prepare('SELECT id, title, author, thumb, description, date_added FROM posts WHERE id=:id');
                $item->execute(['id'=>$id]);
                return $item->fetch(\PDO::FETCH_ASSOC);
            } catch (\PDOException $exception){
                echo "Ошибка выполнения запроса" . $exception->getMessage();
            }
        }
    }
    public function getPosts()
    {
        try {
            $query = 'SELECT id, title, author, thumb, description, date_added FROM posts';
            $posts = $this->pdo->query($query);
            return $posts->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $exception) {
            echo "Ошибка выполнения запроса" . $exception->getMessage();
        }
    }
}