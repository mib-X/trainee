<?php


namespace Application\Controller;


use Core\View;

class DefaultController extends \Core\Controller
{
    public function actionIndex(){
        $this->title = "Main page title";
        $data['posts'] = require ROOT . "/Application/config/posts.php";
        $page = $this->render('posts', $data);
        echo (new View) ->render($page);
    }
}