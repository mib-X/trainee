<?php


namespace Application\Model;


use Core\PDOConnection;

class FillDbModel
{
    private $pdo;
    public $posts;
    public $users;

    public function __construct()
    {
        $this->pdo = PDOConnection::getConnection();
        $this->posts = include ROOT . "/Application/config/posts.php";
        $this->users = include ROOT . "/Application/config/users.php";
    }

    public function AddPost($posts)
    {
        try{
            $query = "INSERT INTO posts values (:id,
            :title,
            :author,
            :post_date,
            :description,
            :thumb)";
            $postIn = $this->pdo->prepare($query);
            $postIn->execute(['id' => null,
                'title' => $posts['title'],
                'author' => $posts['author'],
                'post_date' => $posts['post_date'],
                'description' => $posts['description'],
                'thumb' => $posts['thumb'],

            ]);
        } catch (\PDOException $e){
            echo "Ошибка выполнения запроса" . $e->getMessage();
        }
    }
}