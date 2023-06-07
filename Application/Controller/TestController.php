<?php


namespace Application\Controller;


use Core\Controller;
use Application\Model;
use Core\PDOConnection;

class TestController extends Controller
{
    public function actionIndex() {
        echo "actionIndex";
        try {
            $user = new Model\User(null, "Yana", "Yana@gmail.com", "w", "1986-11-21", "/img/user-logo.jpeg");
        } catch (\Exception $exception) {
            echo "Can't create USER" . $exception->getMessage();
        }
        //var_dump($user);
        $userMapper = new Model\UserMapper(PDOConnection::getConnection());
        $user1 = $userMapper->getById(3);
        $pmapper = new Model\PostMapper(PDOConnection::getConnection());
        $post = $pmapper->getPosts(5);
        var_dump($post);
    }
}

